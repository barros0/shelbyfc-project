<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Auth;

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

}
