<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        return view('index');
    }


    public function dologin(Request $request){

        if (Auth::attempt(['email'=>$request->email], ['password'=>$request->password])) {
            return redirect()->route('index');
        }

        return back();
    }
}
