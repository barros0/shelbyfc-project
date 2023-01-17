<?php

namespace App\Http\Controllers;

use App\Models\withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdraws = withdraw::all();

        return view('admin.withdraw.index', compact('withdraws'));
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
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function show(withdraw $withdraw)
    {

        return view('admin.withdraw.show', compact('withdraw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(withdraw $withdraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, withdraw $withdraw)
    {
        $withdraw->complete = 1;
        $withdraw->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(withdraw $withdraw)
    {
        //
    }
}
