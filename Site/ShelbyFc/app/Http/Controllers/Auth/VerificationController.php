<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users_Verify;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\App;
use Session;
use Auth;
use Mail;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


    public function verify_email($token)
    {

        $user = Users_Verify::where('token',$token)->firstorfail()->user;

        if(empty($user->email_verified_at)){
            $user->email_verified_at = Carbon::now();
            $user->status = 2;
            $user->save();

            Session::flash('success','Email confirmado!');
            return redirect()->route('perfil');

        }
        else{
            return redirect()->route('index');
        }

    }

    public function resend_verify_email(Request $request)
    {

        $user = \App\Models\User::where('email',Auth::user()->email)->first();

        if(empty($user)){
            Session::flash('alert','Este email ainda não se encontra registado!');
            return back();
        }

        if(empty($user->email_verified_at)){

             $token = $user->user_verify->token;

            Mail::send('email.emailVerificationEmail', compact('token'), function($message) use($user){
                $message->to($user->email);
                $message->subject('Confirme o seu e-mail');
            });


            Session::flash('success','Email enviado!');
            return redirect()->route('perfil');

        }
        else{
            return redirect()->route('index');
        }

    }
}
