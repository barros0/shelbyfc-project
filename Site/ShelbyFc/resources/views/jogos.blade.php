@extends('layouts.master')

@include('partials.head')

@section('title', 'Calendário de Jogos  - Shelby FC')

@section('content')

    <div class="background-foto-calendario">
        <h1 class="tit-principal">Calendário de Jogos</h1>
    </div>

    <div class="container my-4">

        <div class="row">

            <div class="calendar">

                @foreach ($proximos_jogos as $game)


                    <div class="match-day">
                        <div class="match-details">
                            <span class="match-date">{{ $data = date('d M y',strtotime($game->datetime_game)) }}</span>
                            <span class="match-hours">{{ $hora = date('H:i',strtotime($game->datetime_game)) }}</span>
                            <span class="match-location">{{ $game->location }}</span>
                        </div>
                        <div class="teams">
                            <div class="match-home-team">
                                <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="Shelby FC" class="match-team">
                                <span class="match-type">Shelby F.C</span>
                            </div>
                            <div class="match-vs-half"><span class="match-type">Amigável</span>
                                <h3 class="match-day-vs">VS</h3></div>
                            <div class="match-away-team">
                                <img src="{{asset('images/liga/'.$game->opponent->image)}}"
                                     alt="{{$game->opponent->name}}" class="match-team">
                                <span class="match-type">{{$game->opponent->name}}</span>
                            </div>
                        </div>
                        <p>Bilhetes disponiveis: {{$game->stock_tickets}}</p>

                        @if($game->stock_tickets > 0)
                            <div>
                                <input type="number"
                                       name="quantidade" value="1">
                                <a href="" class="btn btn-primary">Comprar</a>
                            </div>
                            <div>
                                <p>Preço</p>
                                <p>
                                    @if(Auth::check() || Auth::subscribed())
                                    @endif
                                </p>
                            </div>
                        @else
                            <p>Bilhetes esgotados</p>
                        @endif


                    </div>
                @endforeach

            </div>

        </div>

    </div>
@endsection
