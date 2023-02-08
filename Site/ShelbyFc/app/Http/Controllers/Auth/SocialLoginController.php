<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SocialAccount;
use Str;
use Storage;
use Carbon\Carbon;

class SocialLoginController extends Controller
{
    public function redirectToProvider(String $provider){
        return \Socialite::driver($provider)->redirect();
    }

    public function providerCallback(String $provider){

        try{
            $social_user = \Socialite::driver($provider)->user();

            // First Find Social Account
             $account = SocialAccount::where([
                'provider_name'=>$provider,
                'provider_id'=>$social_user->getId()
            ])->first();

            // If Social Account Exist then Find User and Login
            if($account){
                if(empty($user->email_verified_at)){
                    $account->user->email_verified_at = Carbon::now();
                    $account->user->save();
                }
                auth()->login($account->user);
                return redirect()->route('home');
            }

            // Find User
            $user = User::where([
                'email'=>$social_user->getEmail()
            ])->first();

            // If User not get then create new user
            if(!$user){
                if($social_user->getavatar()){
                    $url = $social_user->getavatar();
                    $contents = file_get_contents($url);
                    $name = substr($url, strrpos($url, '/') + 1).'.png';
                    //$contents->move(public_path('images/users'),$name);
                    $avatar = $name;

                    $path = public_path('images/users/'.$name);
                    file_put_contents($path, $contents);

                    $avatar = $name;
                }
                else{
                    $avatar = 'noimage.png';
                }

                $user = User::create([
                    'email'=>$social_user->getEmail(),
                    'name'=>$social_user->getName(),
                    'image'=>$avatar,
                    'email_verified_at'=>Carbon::now(),
                    'status'=>'Ativo',
                    'password'=>Str::random(50),
                ]);
                $user->email_verified_at = Carbon::now();
                $user->save();
            }
/*
  +id: "103984469427037044952"
  +nickname: null
  +name: "Mica G"
  +email: "submica99@gmail.com"
  +avatar: "https://lh3.googleusercontent.com/a/ALm5wu0vpmSiSJ8p2x64oLqeGlpOtn2QotY-58dYORELVA=s96-c"
  +user: array:11 [▶]
  +attributes: array:6 [▶]
  +token: "ya29.a0AeTM1ieMsy5DCpsYUzVQ9UOdh6ixyz0STdaIQPtk1S4sEEhWkmGxsytp97qt-YTYFtrEAjAQ81Y6VtS4Cm69HGGMjTqNd3pgeFEpmQzMf_gnxlO0af-_883ePv62QehwLPyvHzQfVj73AMuABqK5u1SOV ▶"
  +refreshToken: null
  +expiresIn: 3599
  +approvedScopes: array:3 [▶]
 * */
            // Create Social Accounts
            $user->socialAccounts()->create([
                'provider_id'=>$social_user->getId(),
                'provider_name'=>$provider
            ]);

            // Login
            auth()->login($user);
            return redirect()->route('home');

        }catch(\Exception $e){
            return redirect()->route('login');
        }
    }
}
