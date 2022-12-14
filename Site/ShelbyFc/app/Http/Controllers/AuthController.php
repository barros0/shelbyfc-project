<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dologin(Request $request){
       /* $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email'=>$request->email], ['password'=>$request->password])) {
            return redirect()->route('index');
        }
        else{

        }

        return back();*/
    }

    public function doregister(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'subname' => 'required',
            'email' => 'required|email',
           // 'phone' => 'required|required|regex:/(01)[0-9]{9}/',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name.' '.$request->subname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->name);
        $user->save();


    }


}
