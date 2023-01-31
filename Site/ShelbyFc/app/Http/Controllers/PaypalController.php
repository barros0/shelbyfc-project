<?php

namespace App\Http\Controllers;

use App\Models\Bets;
use App\Models\BetsPayment;
use App\Models\Game;
use App\Models\Subscription;
use App\Models\Ticket;
use App\Models\Transactions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Session;

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

            $valor_paypal_paid = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];


            // se o total do paypal for diferente do valor da bet significa que usou saldo da conta -- e entao removeos
            if($bet->total != $valor_paypal_paid){
                Auth::user()->balance -= ($bet->value - $valor_paypal_paid);
                Auth::user()->save();
            }

// cria historico de transacao
            $transaction = new Transactions();
            $transaction->user_id = Auth::id();
            $transaction->description = 'Aposta no jogo nº' . $game->id . ' | Shelby FC VS ' . $game->opponent->name;
            $transaction->value = $bet->value;
            $transaction->save();

            return redirect()->route('bets')
                /*redirect()*/
                /* ->route('createTransaction')*/
                ->with('success', 'Aposta realizada. Boa sorte!');
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
        return redirect()
            ->route('tobet')
            ->with('error', $response['message'] ?? 'Você cancelou o pagamento!');
    }

    public function cancelTransactionTicket(Request $request)
    {

        return redirect()
            ->route('tickets')
            ->with('error', $response['message'] ?? 'Você cancelou o pagamento!');
    }




    public function pay_subscription(Subscription $subscription){


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
                        "value" => $subscription->value
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

            return back()
              //  ->route('createTransaction')
                ->with('error', 'Algo de errado aconteceu :( .');
        } else {
            return back()
                //->route('createTransaction')
                ->with('error', $response['message'] ?? 'Algo está errado :( .');
        }
    }

    public function success_transaction_ticket(Request $request,$gameid,$quantidade,$price){


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $game = Game::AvaliableDateBuyTicket()->findOrFail($gameid);

            $game->stock_tickets -= $quantidade;
            $game->save();

            for ($i = 1; $i <= $quantidade; $i++) {
                $ticket = new Ticket();
                $ticket->user_id = Auth::id();
                $ticket->game_id = $gameid;
                $ticket->price = $price;
                $ticket->save();
            }

            Session::flash('success','Bilhete aquirido, Bom Jogo!');
            return redirect()->route('tickets');

        } else {
            return back()->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

}
