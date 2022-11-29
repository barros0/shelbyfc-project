<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dologin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email'=>$request->email], ['password'=>$request->password])) {
            return redirect()->route('index');
        }
        else{

        }

        return back();
    }

    public function doregister(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'repeat_password' => 'required|same:password',
        ]);


    }


}
