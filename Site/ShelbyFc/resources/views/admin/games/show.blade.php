@extends('layouts.admin.master')

@section('title', 'Jogo Shelby vs'. $game->opponent->name .' | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.games.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Jogo Shelby vs {{$game->opponent->name}}</h1>

    <div class="container my-4">

        <div class="row">
    
        <div class="calendar">    
    
            <div class="match-day">
                <div class="match-details">
                    <span class="match-date">{{ $data = date('d M y',strtotime($game->datetime_game)) }}</span>
                    <span class="match-hours">{{ $hora = date('H:i',strtotime($game->datetime_game)) }}</span>
                    <span class="match-location">{{$game->location}}</span>
                </div>
                <div class="teams">
                    <div class="match-home-team">
                        <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="Shelby FC" class="match-team">
                        <span class="match-type">Shelby F.C</span>
                    </div>
                    @if($game->result_home !== null)
                    <div class="match-result-container">
                        <div class="result-bg"><span class="match-result">{{$game->result_home}}</span></div>
                    </div>
                    @endif  
                    <div class="match-vs-half"><span class="match-type">Amigável</span><h3 class="match-day-vs">VS</h3></div>
                    @if($game->result_opponent !== null)
                    <div class="match-result-container">    
                        <div class="result-bg"><span class="match-result">{{$game->result_opponent}}</span></div>          
                    </div>
                    @endif
                    <div class="match-away-team">
                        <img src="{{asset('images/liga/'.$game->opponent->image)}}" alt="{{$game->opponent->name}}"  class="match-team">
                        <span class="match-type">{{$game->opponent->name}}</span>
                    </div>
                </div>
            </div>
    
        </div>
       
        </div>
    
        </div>

    @if($game->result_home !== null || $game->result_opponent !== null)
    @else
    <form action="{{ route('admin.games.publish.doresults', $game) }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Publicar Resultado</h2>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Golos Shelby F.C</label>
                <input class="form-control" name="resultado_shelby" type="number" required>
            </div>

            <div class="form-group col-md-6">
                <label for="apponent">Golos {{$game->opponent->name}}</label>
                <input class="form-control" name="resultado_adversario" type="number" id="opponent" required>
            </div>

            <button type="submit" class="btn btn-primary">Publicar Resultado</button>
        </div>
    </form>
    @endif
@endsection
