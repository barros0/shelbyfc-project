<?php

namespace App\Http\Controllers;

use App\Models\Bets;
use App\Models\Game;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class BetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getbets_values(Request $request){

        $game_id = $request->game;

        $game = Game::findorfail($game_id);


        $value = $request->value_bet;


        return response()->json([
            'date_game' => date('Y-m-d',$game->datetime_game),
            'game_id' => $game->id,
            'win' => $game->win,
            'draw' => $game->draw,
            'lose' => $game->lose,
            'team1_img' => asset('images/liga/shelby_fc.png'),
            'team1' => 'Shelby FC',
            'team2_img' => asset('images/liga/'.$game->opponent->images),
            'team2' => $game->opponent->name,
           // 'value' => $value_win,
        ]);

    }

    public function newbet(Request $request){


        $provider = new PayPalClient;
        //$provider = \PayPal::setProvider();
// check if payment is recurring

        $recurring = $request->input('recurring', false) ? true : false;

        // get new invoice id
        $invoice_id = Invoice::count() + 1;

        // Get the cart data
        $cart = $this->getCart($recurring, $invoice_id);

        // create new invoice
        $invoice = new Invoice();
        $invoice->title = $cart['invoice_description'];
        $invoice->price = $cart['total'];
        $invoice->save();

        // send a request to paypal
        // paypal should respond with an array of data
        // the array should contain a link to paypal's payment system
        $response = $this->provider->setExpressCheckout($cart, $recurring);

        // if there is no link redirect back with error message
        if (!$response['paypal_link']) {
            return redirect('/')->with(['code' => 'danger', 'message' => 'Something went wrong with PayPal']);
            // For the actual error message dump out $response and see what's in there
        }

        // redirect to paypal
        // after payment is done paypal
        // will redirect us back to $this->expressCheckoutSuccess
        return redirect($response['paypal_link']);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bets  $bets
     * @return \Illuminate\Http\Response
     */
    public function show(Bets $bets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bets  $bets
     * @return \Illuminate\Http\Response
     */
    public function edit(Bets $bets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bets  $bets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bets $bets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bets  $bets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bets $bets)
    {
        //
    }
}
