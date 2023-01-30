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

                @if($game->result_home !== null || $game->result_opponent !== null)
                @else

                    <div class="match-day">
                        <div class="match-details">
                            <span class="match-date">{{ $data = date('d M y',strtotime($game->datetime_game)) }}</span>
                            <span class="match-hours">{{ $hora = date('H:i',strtotime($game->datetime_game)) }}</span>
                            <span class="match-location">{{ $game->location }}</span>
                            @if($game->stock_tickets > 0)
                            <div class="mt-2 d-flex text-center">
                                <a href="/comprar-bilhete" class="btn btn-registo" style="color:white; font-size:15px">Bilhetes</a>
                            </div>
            
                        @endif
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

                


                    </div>
                    @endif

                @endforeach

            </div>

        </div>

    </div>
@endsection
