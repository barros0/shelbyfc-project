<?php

namespace App\Http\Controllers;

use App\Models\BetsPayment;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Game;
use App\Models\News;
use App\Models\faqs;
use App\Models\Terms;
use App\Models\sobre;
use App\Models\socio_price;
use App\Models\Subscription;
use App\Models\Categorie;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PageController extends Controller
{
    public function index()
    {
        $noticias = News::orderBy('created_at', 'desc')->take(3)->get();
        $proximos_jogos = Game::lastGames()->orderBy('datetime_game', 'desc')->take(2)->get();

        return view('index', compact('noticias',  'proximos_jogos'));
    }

    public function login()
    {
        return view('login');
    }

    public function noticias()
    {
        $noticias = News::paginate(6);

        $categories = Categorie::get();

        return view('noticias', compact('noticias', 'categories'));
    }

    public function NoticiaModal($id)
    {
        $noticia = News::findOrFail($id);
        $categories = Categorie::all();

        $noticia->views += 1;
        $noticia->save();

        return view('NoticiaModal', compact('noticia', 'categories'));
    }

    public function news_categories($category)
    {

        $category = Categorie::where('id', $category)->firstOrFail();

        $noticias = $category->news()->paginate(6);
        $categories = Categorie::get();

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
            'cc' => 'required|image|mimes:jpeg,png,jpg,pdf|max:4048',
        ]);
        $user = Auth::user()->id;
        $nome = Auth::user()->name;
        $email = Auth::user()->email;

        $subscription = new Subscription();
        $cc = $request->cc;

        $name_cc = 'cc-' . Auth::id() . '-' . time() . '.' . $cc->getClientOriginalExtension();
        $cc->move(public_path('users/cc'), $name_cc);
        $subscription->user_id = $user;
        $subscription->email = $email;
        $subscription->cc = $name_cc;
        $subscription->name = $nome;

        $subscription->address = $request->morada;
        $subscription->city = $request->cidade;
        $subscription->country_id = $request->pais;
        $subscription->postal_code = $request->zipcode;
        $subscription->nif = $request->nif;
        $subscription->birthdate = $request->birthdate;
        $subscription->birthdate = $request->birthdate;
        $subscription->deleted_at = Carbon::now();
        $subscription->save();

        $user = Auth::user();
        $user->address = $request->morada;
        $user->city = $request->cidade;
        $user->country_id = $request->pais;
        $user->postal_code = $request->zipcode;
        $user->nif = $request->nif;
        $user->birthdate = $request->birthdate;

        $age = Carbon::parse($request->birthdate)->diff(Carbon::now())->y;

        $preco = socio_price::where('min_age','>=',$age)->where('max_age','<=',$age)->first()->preco;

        if(empty($preco)){
            Session::flash('alert','Lamentamos mas não temos um preço adquado á sua idade!');
            return back();
        }

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success.transaction.subscription',$subscription),
                "cancel_url" => route('paypal.cancel.transaction.subscription'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => $preco
                    ],
                ],

            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {


            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('createTransaction')
                ->with('error', 'Algo de errado aconteceu :( .');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Algo está errado :( .');
        }


        Session::flash('success', 'Obrigado pela sua subscrição! Receberá uma notificação no seu email quando for aprovada');
        return back();
    }

    public function faqs()
    {
        $faqs = faqs::all();

        return view('faqs')->with('faqs', $faqs);
    }
    public function terms()
    {
        $terms = terms::all();

        return view('terms')->with('terms', $terms);
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

    public function buy_ticket()
    {
        $proximos_jogos = Game::AvaliableDateBuyTicket()->get();

        return view('tickets', compact('proximos_jogos'));
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
        $next_games = Game::AvaliableBet()->get();

        return view('tobet', compact('next_games'));
    }


    public function jogos()
    {
        $proximos_jogos = Game::NextGames()->get();

        return view('jogos', compact('proximos_jogos'));
    }


    public function resultados()
    {
        $proximos_jogos = Game::LastGames()->get();

        return view('results', compact('proximos_jogos'));
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
