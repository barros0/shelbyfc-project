<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){


        return view('index');
    }

    public function  login(){

        return view('login');
    }



    public function minha_conta(){
        return view('perfil.index');
    }
}
