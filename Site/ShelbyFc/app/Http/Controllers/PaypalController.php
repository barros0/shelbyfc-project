<?php

namespace App\Http\Controllers;

use App\Models\Bets;
use App\Models\BetsPayment;
use App\Models\Game;
use App\Models\Transactions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * sucesso transacao.
     *
     * @return \Illuminate\Http\Response
     **/
    public function success_transaction_bet(Request $request)
    {

        //return 'transacao sucesso';

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            $bet_id = $response['id'];

            //find bet by id paypal
            $betpaid = BetsPayment::where('paypal_id', $bet_id)->firstOrFail();
            // update bet
            $betpaid->date =
                date('d-m-y H:i:s',
                    strtotime($response['purchase_units'][0]['payments']['captures'][0]['create_time']));
            $betpaid->response = $response;
            $betpaid->save();

            // mete bet como paga
            $bet = Bets::find($betpaid->bet_id);
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

            return back()
                /*redirect()*/
                /* ->route('createTransaction')*/
                ->with('success', 'Transaction complete.');
        } else {
            return back()/*redirect()
                ->route('createTransaction')*/
            ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancelar transacao.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        // return 'transacao cancelada';
        return redirect()
            ->route('tobet')
            ->with('error', $response['message'] ?? 'Você cancelou esta transação.');
    }
}
