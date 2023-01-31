@extends('layouts.admin.master')

@section('title', 'Adicionar Bilhete | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.tickets.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Adicionar Bilhete</h1>

    <form action="{{ route('admin.tickets.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
                <label for="">Jogo</label>
                <div class="gametable_bet">
                    @foreach($partidas as $game)
                        <div class="game-bet-option" itemid="{{$game->id}}">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="team-img">
                                    <img src="{{asset('images/logo.svg')}}" alt="">
                                    <p class="text center">Shelby FC</p>
                                </div>

                                <div class="info-game d-flex justify-content-center flex-column align-content-between g-0 m-0 p-0">
                                    <p class="text-center fw-bolder">Amigável</p>
                                    <h4 class="vs text-center">VS</h4>
                                    <p class="text-center">{{$game->datetime_game}}</p>
                                </div>

                                <div class="team-img">
                                    <img src="{{asset('images/liga/'.$game->opponent->image)}}"
                                         alt="{{$game->opponent->name}}">
                                    <p class="text center">{{$game->opponent->name}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="data_jogo">Email</label>
                <input class="form-control" name="mail_user" type="email" id="mail_user" required>
            </div>

            <button type="submit" class="btn btn-primary">Inserir</button>
        </div>

    </form>
@endsection
