<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Game;
use App\Models\News;
use App\Models\faqs;
use App\Models\socio_price;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {

        return view('login');
    }
    public function noticias()
    {

        $noticias = News::all();

        return view('noticias', compact('noticias'));
    }
    public function inscrever()
    {
        $socio_price = socio_price::all();

        return view('inscrever')->with('socio_price', $socio_price);
    }
    public function faqs()
    {
        $faqs = faqs::all();

        return view('faqs')->with('faqs', $faqs);
    }
    public function styles()
    {

        return view('styles');
    }

    public function minha_conta()
    {

        $countrys = Country::all();
        return view('perfil.perfil', compact('countrys'));
    }

    public function subscricoes()
    {

        $subscricoes = Auth::user()->subscri;
        return view('perfil.subscricoes');
    }

    public function seguranca()
    {

        return view('perfil.seguranca');
    }

    public function transacoes()
    {

        return view('perfil.transacoes');
    }

    public function preferencias()
    {

        return view('perfil.preferencias');
    }


    public function noticia($id)
    {

        $noticia = News::findOrFail($id);

        return view('noticia', compact('noticia'));
    }


    public function jogo($id)
    {

        $game = Game::findOrFail($id);
        return view('noticia', compact('game'));
    }
}
