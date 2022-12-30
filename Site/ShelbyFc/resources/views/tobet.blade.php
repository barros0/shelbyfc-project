@extends('layouts.master')

@section('title', 'ShelbyFC')


@section('content')

    <div class="container">

        <div class="d-flex flex-wrap">

            <div>

                <div class="row text-center">
                    <h2>Próximos jogos</h2>
                </div>

            <div class="gametable_bet">

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between">
                            <p>Amigável</p>
                            <span class="vs text-center">VS</span>
                            <p>15 jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between">
                            <p>Amigável</p>
                            <span class="vs text-center">VS</span>
                            <p>15 jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between">
                            <p>Amigável</p>
                            <span class="vs text-center">VS</span>
                            <p>15 jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between">
                            <p>Amigável</p>
                            <span class="vs text-center">VS</span>
                            <p>15 jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <h2>Selecione um jogo...</h2>

                <div class="game-selected">


                    <div class="row">
                        <h4>Apostar</h4>
                        <p>15 jan 2023</p>
                    </div>


                    <div class="row">

                        <input type="text" placeholder="Montante">
                    </div>
                    <div class="row">
                        <h3>Ganhos possiveis <span>200€</span></h3>
                    </div>


                    <div class="row">
                        <button class="btn btn-primary">Apostar</button>
                    </div>
                </div>

            </div>


        </div>


    </div>


@endsection
