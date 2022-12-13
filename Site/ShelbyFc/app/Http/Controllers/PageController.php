<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Game;
use App\Models\News;
use App\Models\faqs;
use App\Models\socio_price;
use App\Models\Subscription;
use App\Models\Categorie;
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

        $categories = Categorie::all();

        return view('noticias', compact('noticias', 'categories'));
    }
    public function inscrever()
    {
        $socio_price = socio_price::all();

        $nacionalidades = Country::all();

        return view('inscrever', compact("socio_price", "nacionalidades"));
    }

    public function inscrever_post(Request $request)
    {
        $this->validate($request, [
            'nif' => 'required|numeric|digits:9',
            'birthdate' => 'required|date',
            'morada' => 'required',
            'cidade' => 'required',
            'pais' => 'required|exists:countries,id',
            'zipcode' => 'required|regex:/^\d{4}-\d{3}?$/',
            'cc' => 'required|image|mimes:jpeg,png,jpg,pdf|max:1048',
        ]);

        //return 1;
        $user = Auth::user()->id;
        $email = Auth::user()->email;

        $subscription = new Subscription();
        $cc = $request->cc;

        if ($cc) {
            $name_cc = 'cc-' . Auth::id() . '-' . time() . '.' . $cc->getClientOriginalExtension();
            $cc->move(public_path('users/cc'), $name_cc);
            $subscription->image = $name_cc;
        }

        $subscription->address = $request->morada;
        //$subscription->address = $request->cc;
        $subscription->city = $request->cidade;
        $subscription->country_id = $request->pais;
        $subscription->postal_code = $request->zipcode;
        $subscription->nif = $request->nif;
        $subscription->birthdate = $request->birthdate;

        $subscription->save();

        Session::flash('success', 'Os seus dados foram atualizados!');
        return back();
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

        $subscriptions = Auth::user()->subscriptions;
        return view('perfil.subscricoes', compact('subscriptions'));
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
