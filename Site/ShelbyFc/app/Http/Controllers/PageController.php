<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){


        return view('index');
    }

    public function login(){

        return view('login');
    }

    public function inscrever(){

        return view('inscrever');
    }



    public function styles(){

        return view('styles');
    }

    public function minha_conta(){

        $countrys = Country::all();
        return view('perfil.perfil', compact('countrys'));
    }

    public function subscricoes(){

        return view('perfil.subscricoes');
    }

    public function seguranca(){

        return view('perfil.seguranca');
    }

    public function transacoes(){

        return view('perfil.transacoes');
    }

    public function preferencias(){

        return view('perfil.preferencias');
    }

}
