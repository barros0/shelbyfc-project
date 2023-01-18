<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Country;
use App\Models\Game;
use App\Models\News;
use App\Models\faqs;
use App\Models\sobre;
use App\Models\socio_price;
use App\Models\Subscription;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;


class PageController extends Controller
{
    public function index()
    {
        $noticias = News::orderBy('created_at', 'desc')->take(3)->get();
        $jogos = Game::orderBy('created_at', 'desc')->take(2)->get();
        $id_js = 0;
        $id_href_js = 0;
        $id_image_js = 0;
        $id_text_js = 0;
        $id_date_js = 0;

        return view('index', compact('noticias', 'id_js', 'id_image_js', 'id_text_js', 'id_date_js','id_href_js'));
    }

    public function login()
    {
        return view('login');
    }

    public function noticias()
    {
        $noticias = News::paginate(6);

        $categories = Categorie::all();

        return view('noticias', compact('noticias', 'categories'));
    }

    public function NoticiaModal($id)
    {
        $noticia = News::findOrFail($id);
        $categories = Categorie::all();

        return view('NoticiaModal', compact('noticia', 'categories'));
    }

    public function news_categories($category)
    {

        $category = Categorie::where('name', $category)->firstOrFail();

        $noticias = $category->news()->paginate(6);
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
        $user = Auth::user()->id;
        $email = Auth::user()->email;

        $subscription = new Subscription();
        $cc = $request->cc;

        $name_cc = 'cc-' . Auth::id() . '-' . time() . '.' . $cc->getClientOriginalExtension();
        $cc->move(public_path('users/cc'), $name_cc);
        $subscription->user_id = $user;
        $subscription->email = $email;
        $subscription->cc = $name_cc;

        $subscription->address = $request->morada;
        //$subscription->address = $request->cc;
        $subscription->city = $request->cidade;
        $subscription->country_id = $request->pais;
        $subscription->postal_code = $request->zipcode;
        $subscription->nif = $request->nif;
        $subscription->birthdate = $request->birthdate;
        $subscription->save();

        $user = Auth::user();
        $user->address = $request->morada;
        $user->city = $request->cidade;
        $user->country_id = $request->pais;
        $user->postal_code = $request->zipcode;
        $user->nif = $request->nif;
        $user->birthdate = $request->birthdate;


        Session::flash('success', 'Obrigado pela sua subscrição! Receberá uma notificação no seu email quando for aprovada');
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

    public function tickets()
    {
        return view('perfil.tickets');
    }

    public function sobre()
    {
        return view('sobre');
    }


    public function bets()
    {
        return view('perfil.bets');
    }


    public function jogo($id)
    {
        $game = Game::findOrFail($id);
        return view('noticia', compact('game'));
    }

    public function tobet()
    {
        $next_games = Game::get();

        return view('tobet', compact('next_games'));
    }


    public function jogos()
    {
        $proximos_jogos = Game::get();

        return view('jogos', compact('proximos_jogos'));
    }


    public function contacts()
    {
        $contacts = Contact::all();

        return view('contacts')->with('contacts', $contacts);
    }



    public function withdraw()
    {

        return view('perfil.withdraw');
    }
}
