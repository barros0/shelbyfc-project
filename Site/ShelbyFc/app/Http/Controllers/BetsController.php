<?php

namespace App\Http\Controllers;

use App\Models\Bets;
use App\Models\Game;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Carbon\Carbon;
use Auth;
use Session;

class BetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getbets_values(Request $request)
    {

        $game_id = $request->game_id;

        $game = Game::findorfail($game_id);

        // se a data limite de aposta estiver ultrapassada
        if (Carbon::now() > $game->limit_bet) {
            abort(404);
        }

        //$value = $request->value_bet;


        return response()->json([
            'date_game' => $game->datetime_game,
            'game_id' => $game->id,
            'win' => $game->win,
            'draw' => $game->draw,
            'lose' => $game->lose,
            'team1_img' => asset('images/liga/shelby_fc.png'),
            'team1' => 'Shelby FC',
            'team2_img' => asset('images/liga/' . $game->opponent->image),
            'team2' => $game->opponent->name,
            // 'value' => $value_win,
        ]);

    }

    public function dobet(Request $request)
    {
        $request->validate([
            'montante' => 'required|numeric|min:1|max:500',
            'jogo' => 'required|exists:games,id',
            'fator' => 'in:draw,win,lose'
        ]);

        $fator = $request->fator;
        $quantiade = $request->montante;


        // verifica se não passou da data limit de jogo
        $game = Game::find($request->jogo)->where()->firstorfail();

        if (Carbon::now() > $game->limit_bet) {
            Session::flash('alert', 'Ultrapassou a data limit de aposta! Data limkite: ' . $game->limit_bet);
            return back();
        }

       // $ganhospossiveis = $valor_fator * $quantiade;


        $bet = new Bets();
        $bet->user_id = Auth::id();
        $bet->game_id = 1;
        $bet->value = 3;
        $bet->fator = $fator;
        $bet->save();


        // get new invoice id
        $bet_id = $bet->id;

        // Get the cart data
        //$cart = $this->getCart(true, $bet_id);

        // create new invoice
        /*$invoice = new Invoice();
        $invoice->title = $cart['invoice_description'];
        $invoice->price = $cart['total'];
        $invoice->save();*/


        $product = [];
        $product['items'] = [
            [
                'name' => 'Nike Joyride 2',
                'price' => 112,
                'desc'  => 'Running shoes for Men',
                'qty' => 2
            ]
        ];

        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 224;

        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);

        return redirect($res['paypal_link']);

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Bets $bets
     * @return \Illuminate\Http\Response
     */
    public function show(Bets $bets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Bets $bets
     * @return \Illuminate\Http\Response
     */
    public function edit(Bets $bets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bets $bets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bets $bets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Bets $bets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bets $bets)
    {
        //
    }
}
