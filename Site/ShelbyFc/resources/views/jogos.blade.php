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

        @foreach ($proximos_jogos as $proximo_jogo)


        <div class="match-day">
            <div class="match-details">
                <span class="match-date">{{ $data = date('d M y',strtotime($proximo_jogo->datetime_game)) }}</span>
                <span class="match-hours">{{ $hora = date('H:i',strtotime($proximo_jogo->datetime_game)) }}</span>
                <span class="match-location">{{ $proximo_jogo->location }}</span>
            </div>
            <div class="teams">
                <div class="match-home-team">
                    <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="Shelby FC" class="match-team">
                    <span class="match-type">Shelby F.C</span>
                </div>
                <div class="match-vs-half"><span class="match-type">Amigável</span><h3 class="match-day-vs">VS</h3></div>
                <div class="match-away-team">
                    <img src="{{asset('images/liga/'.$proximo_jogo->opponent->image)}}" alt="{{$proximo_jogo->opponent->name}}"  class="match-team">
                    <span class="match-type">{{$proximo_jogo->opponent->name}}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
   
    </div>

    </div>
@endsection
