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
        $users_subscribed = Subscription::all();
        return view('admin.socios.index', compact('users_subscribed'));
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        return view('admin.socios.show', compact('subscription'));
    }

}
