<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
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

        $games = Game::orderby('datetime_game','desc')->get();
        return view('admin.games.index', compact('games'));
    }


    public function publicar_resultados(Game $game,Request $request)
    {

        $request->validate([
            'home_result' => 'required|numeric',
            'visit_result' => 'required|numeric',
        ]);


        $bets = $game->bets;

        foreach ($bets as $bet){



        }


        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $teams = Team::all();
        return view('admin.games.create', compact('teams'));
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
            'stock_bilhetes' => 'required|numeric',
            'data_limite_bilhetes' => 'required|date',
            'preco_bilhete' => 'required|numeric|min:0',
            'preco_bilhete_socio' => 'required|numeric|min:0',
            'local' => 'required',
            'equipa' => 'required|exists:teams,id',
            'data_jogo' => 'required|date',
        ]);

        //  generate odds

        //temporario
        function gerar_prob_random(){
            $min = 0.5;
            $max = 3;
            return mt_rand ($min*10, $max*10) / 10;
        }


        $game = New Game();
        $game->ticket_available = 1;
        $game->ticket_price = $request->preco_bilhete;
        $game->ticket_price_partner = $request->preco_bilhete_socio;
        $game->location = $request->local;
        $game->team_id = $request->equipa;
        $game->limit_bet = $request->data_jogo;
        $game->limit_buy_ticket = $request->data_limite_bilhetes;
        $game->stock_tickets = $request->stock_bilhetes;
        $game->datetime_game = $request->data_jogo;
        $game->draw = gerar_prob_random();
        $game->win = gerar_prob_random();
        $game->lose = gerar_prob_random();
        $game->save();

        Session::flash('success', 'Jogo publicado!');
        return back();
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
