<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use Carbon\Carbon;
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

        $games = Game::orderby('datetime_game', 'desc')->get();
        return view('admin.games.index', compact('games'));
    }


    public function game_tickets_value(Request $request)
    {

        $game_id = $request->game_id;

        $game = Game::findorfail($game_id);

        // se a data limite de compra de bilhete estiver ultrapassada
        if (Carbon::now() > $game->limit_buy_ticket	) {
            abort(404);
        }

        //$value = $request->value_bet;


        return response()->json([
            'date_game' => $game->datetime_game,
            'game_id' => $game->id,
            'team1_img' => asset('images/liga/shelby_fc.png'),
            'team1' => 'Shelby FC',
            'team2_img' => asset('images/liga/' . $game->opponent->image),
            'team2' => $game->opponent->name,
            'limit_buy' => $game->limit_buy_ticket,
            'quantidade' => $game->stock_tickets,
            'preco' => $game->ticket_price,
            'preco_socio' => $game->ticket_price_partner,
            'location' => $game->location,


            // 'value' => $value_win,
        ]);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        //  generate odds

        //temporario
        function gerar_prob_random()
        {
            $min = 1;
            $max = 4;
            return mt_rand($min * 10, $max * 10) / 10;
        }

        $fields = $request->validated();

        $game = new Game();
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
            'resultado_adversario' => 'required|numeric|min:0',
            'resultado_shelby' => 'required|numeric|min:0',
        ]);


        $result_opponent = $request->resultado_adversario;
        $result_home = $request->resultado_shelby;

        //empate
        if ($result_home == $result_opponent) {
            $fator_resultado = 'draw';
        } //if casa win
        else if ($result_home > $result_opponent) {
            $fator_resultado = 'win';
        } //if casa lose
        else if ($result_home < $result_opponent) {
            $fator_resultado = 'lose';
        } else {
            abort(500);
        }

        // $game->result = $fator_resultado;
        $game->result_opponent = $request->resultado_adversario;
        $game->result_home = $request->resultado_shelby;
        $game->result = $fator_resultado;
        $game->save();


        foreach ($game->bets as $bet) {
            // se estiver paga
            if ($bet->is_paid == 1) {
                // if win/acertou palpite adiciona esse valor a conta
                if ($bet->fator == $fator_resultado) {
                    $bet->user->balance += $game->$fator_resultado * $bet->value;
                    $bet->user->save();
                    $bet->result = 2;
                    $bet->save();
                }
            } //senao apaga
            else {
                $bet->delete();
            }
        }

        Session::flash('success', 'Resultados publicados!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Game $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Game $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $teams = Team::all();
        return view('admin.games.edit', compact('game', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //

        $this->validate($request, [
            'preco_bilhete' => 'required',
            'preco_bilhete_socio' => 'required',
            'local' => 'required',
            'equipa' => 'required',
            'data_jogo' => 'required',
            'data_limite_bilhetes' => 'required',
            'stock_bilhetes' => 'required',
            'data_jogo' => 'required',
        ]);

        $game->ticket_price = $request->preco_bilhete;
        $game->ticket_price_partner = $request->preco_bilhete_socio;
        $game->location = $request->local;
        $game->team_id = $request->equipa;
        $game->limit_bet = $request->data_jogo;
        $game->limit_buy_ticket = $request->data_limite_bilhetes;
        $game->stock_tickets = $request->stock_bilhetes;
        $game->datetime_game = $request->data_jogo;
        $game->save();

        Session::flash('success', 'Jogo Atualizado!');
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Game $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        Session::flash('success', 'Jogo eliminado!');
        return back();
    }

}
