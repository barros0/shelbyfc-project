@extends('layouts.admin.master')


@section('title', 'Jogo Shelby vs'. $game->opponent->name .' | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.games.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Jogo Shelby vs {{$game->opponent->name}}</h1>


    <div class="row">
        <div class="col-sm-6">
            <span class="bold">Stock de bilhetes:</span>
            <span> {{$game->stock_tickets}}</span>
        </div>
    </div>







    {{$game->location}}

    {{$game->ticket_price}}

    {{$game->ticket_price_partner}}

    {{$game->opponent->name}}


    {{$game->limit_buy_ticket}}

    {{$game->stock_tickets}}

    {{$game->datetime_game}}





    @if(!$game->result_home || !$game->result_opponent)
    <form action="{{ route('admin.games.publish.doresults', $game) }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Publicar resultados</h2>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Resultado Shelby</label>
                <input class="form-control" name="resultado_shelby" type="number" required>
            </div>

            <div class="form-group col-md-6">
                <label for="apponent">Resultado de {{$game->opponent->name}}</label>
                <input class="form-control" name="resultado_adversario" type="number" id="opponent" required>
            </div>

            <button type="submit" class="btn btn-primary">Publicar</button>
        </div>
    </form>
    @endif
@endsection
