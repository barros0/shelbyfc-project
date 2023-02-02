<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Auth;
use Session;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    //
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        return view('admin.subscriptions.show', compact('subscription'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'preco' => 'required|numeric',
        ]);

        $subscription->state = 2;
        $subscription->value = $request->preço;
        $subscription->expires_at = Carbon::now()->addYear();
        $subscription->save();

        Session::flash('success', 'Subscrição Aprovada!');
        return back();


    }

}
