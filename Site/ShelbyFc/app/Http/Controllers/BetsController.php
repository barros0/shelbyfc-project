<?php

namespace App\Http\Controllers;

use App\Models\Bets;
use App\Models\BetsPayment;
use App\Models\Game;
use App\Models\Transactions;
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

        $game = Game::AvaliableBet()->findorfail($game_id);

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
            'fator' => 'required|in:draw,win,lose'
        ]);

        $fator = $request->fator;
        $montante = $request->montante;


        // verifica se não passou da data limit de jogo
        $game = Game::find($request->jogo)->where('limit_bet', '>', Carbon::now())->firstorfail();

        $total = $montante;//$game->$fator * $montante;

        if (Carbon::now() > $game->limit_bet) {
            Session::flash('alert', 'Ultrapassou a data limit de aposta! Data limkite: ' . $game->limit_bet);
            return back();
        }

        // $ganhospossiveis = $valor_fator * $quantiade;


        $bet = new Bets();
        $bet->user_id = Auth::id();
        $bet->game_id = $game->id;
        $bet->value = $total;
        $bet->fator = $fator;
        $bet->save();

        $bet_id = $bet->id;

        // se o user tiver saldo suf par paar paga logo
        if(Auth::user()->balance >= $total){

            // mete bet como paga
            $bet = Bets::find($bet_id);
            $bet->is_paid = true;
            $bet->save();

            // find game
            $game = Game::find($bet->game_id);

            // cria historico de transacao
            $transaction = new Transactions();
            $transaction->user_id = Auth::id();
            $transaction->description = 'Aposta no jogo nº' . $game->id . ' | Shelby FC VS ' . $game->opponent->name;
            $transaction->value = $bet->value;
            $transaction->save();

            Auth::user()->balance -= $total;
            Auth::user()->save();

            Session::flash('success', 'Aposta realizada!!');
            return back();
        }
        else{
            $total -= Auth::user()->balance;
        }




        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success.transaction.bet'),
                "cancel_url" => route('paypal.cancel.transaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => $total
                    ],
                ],

            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            $payment = new BetsPayment();
            $payment->bet_id = $bet_id;
            $payment->paypal_id = $response['id'];
            $payment->save();

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
