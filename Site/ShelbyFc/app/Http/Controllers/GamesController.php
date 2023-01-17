<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
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
    public function store(GameRequest $request)
    {
        //  generate odds

        //temporario
        function gerar_prob_random(){
            $min = 1;
            $max = 4;
            return mt_rand ($min*10, $max*10) / 10;
        }

        $fields=$request->validated();

        $game = New Game();
        //$game->fill($fields);
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


    public function post_results($game)
    {
        $game = Game::findorfail($game);
        return view('admin.games.results', compact('game'));
    }


    public function dopost_results(Game $game, Request $request)
    {

        $request->validate([
            'resultado_adversario' => 'required|numeric',
            'resultado_shelby' => 'required|numeric',
        ]);


        $result_opponent = $request->resultado_adversario;
        $result_home = $request->resultado_shelby;

        //empate
        if($result_home == $result_opponent){
            $fator_resultado = 'draw';
        }
        //if casa win
        else if($result_home > $result_opponent){
            $fator_resultado = 'win';
        }
        //if casa lose
        else if($result_home < $result_opponent){
            $fator_resultado = 'lose';
        }
        else{
            abort(500);
        }

       // $game->result = $fator_resultado;
        $game->result_opponent = $request->resultado_adversario;
        $game->result_home = $request->resultado_shelby;
        $game->save();



        $bets = $game->bets;


        foreach ($bets as $bet) {
            // if win/acertou palpite adiciona esse valor a conta
            if ($bet->fator == $fator_resultado){
                $bet->user->balance += $game->$fator_resultado * $bet->value;
                $bet->user->save();
            }
        }

        Session::flash('success', 'Resultados publicados!');
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
        return view('admin.games.show', compact('game'));
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
