<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use Session;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.games.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'small_description' => 'required',
            'description' => 'required',
            'ticket_avaliable' => 'boolean',
            'title' => 'required',
            'title' => 'required',
            'title' => 'required',
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);



        $game = New Game();
        $game->title = $request->title;
        $game->small_description = $request->title;
        $game->description = $request->title;
        $game->ticket_avaliable = $request->title;
        $game->ticket_price = $request->title;
        $game->ticket_price_partner = $request->title;
        $game->location = $request->title;
        $game->team_id = $request->team;
        $game->limit_bet = $request->limit_bet;
        $game->limit_buy_ticket = $request->limit_buy_ticket;
        $game->stock_tickets = $request->title;
        $game->datetime_game = $request->title;
        $game->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        Session::flash('success', 'Jogo eliminado!');
        return back();
    }
}
