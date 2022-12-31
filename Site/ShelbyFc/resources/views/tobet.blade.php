@extends('layouts.master')

@section('title', 'ShelbyFC')


@section('content')

    <div class="container my-4">

        <div class="d-flex flex-wrap justify-content-center">

            <div class="sidebar-apostas w-30">

                <div class="row text-center">
                    <h2 class="text-center">Próximos jogos</h2>
                </div>

            <div class="gametable_bet">

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between g-0 m-0 p-0">
                            <p class="text-center fw-bolder">Amigável</p>
                            <h4 class="vs text-center">VS</h4>
                            <p class="text-center">15 Jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/liga/sl_benfica.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/liga/UD_Oliveirense.png')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between">
                            <p class="text-center fw-bolder">Amigável</p>
                            <h4 class="vs text-center">VS</h4>
                            <p class="text-center">15 Jan 2023</p>
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
                            <p class="text-center fw-bolder">Amigável</p>
                            <h4 class="vs text-center">VS</h4>
                            <p class="text-center">15 Jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/liga/trofense.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="game-bet-option">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="team-img">
                            <img src="{{asset('images/logo.svg')}}" alt="">
                        </div>

                        <div class="info-game d-flex justify-content-center flex-column align-content-between">
                            <p class="text-center fw-bolder">Amigável</p>
                            <h4 class="vs text-center">VS</h4>
                            <p class="text-center">15 Jan 2023</p>
                        </div>

                        <div class="team-img">
                            <img src="{{asset('images/liga/fc_penafiel.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row text-center mx-0 g-0 p-0 w-70">
               <!-- <h2 class="mb-3">Selecione um jogo...</h2> -->

                <div class="game-selected px-3 d-flex flex-column flex-wrap justify-content-evenly">

                    <div class="row g-0 m-0 p-0">
                            <div class="d-flex flex-row justify-content-evenly">
                                <div class="team-img">
                                    <img src="{{asset('images/logo.svg')}}" alt="">
                                </div>
        
                                <div class="info-game d-flex justify-content-center flex-column align-content-between g-0 m-0 p-0">
                                    <p class="text-center fw-bolder">Amigável</p>
                                    <h1 class="vs text-center">VS</h1>
                                    <p class="text-center">15 Jan 2023</p>
                                </div>
        
                                <div class="team-img">
                                    <img src="{{asset('images/liga/sl_benfica.png')}}" alt="">
                                </div>
                        </div>

                    </div>
   


                    <div class="row g-0 m-0 p-0">
                        <h4 class="mb-3">Apostar</h4>

                        <div class="select-bet">
                            <div class="bet-to-select">
                                <h3>W</h3>
                                <span class="odd fw-bolder" id="win-odd">1.52</span>

                            </div>
                            <div class="bet-to-select">
                                <h3>D</h3>
                                <span class="odd fw-bolder" id="draw-odd">0.87</span>

                            </div>
                            <div class="bet-to-select">
                                <h3>L</h3>
                                <span class="odd fw-bolder" id="lose-odd">3.36</span>

                            </div>
                        </div>

                    </div>

                    <div class="row g-0 m-0 p-0">

                        <div class="montante">
                        <span class="details-montante text-end"> <span class="cinza-montante">Min:</span> 1€ <span class="cinza-montante">Máx:</span> 500€</span>
                        <input type="number" placeholder="Montante" min="1" max="500">
                        <div class="montantes-rapidos">
                            <button class="btn-secondary">1€</button>
                            <button class="btn-secondary">10€</button>
                            <button class="btn-secondary">25€</button>
                            <button class="btn-secondary">50€</button>
                        </div>
                    </div>
                    </div>
                    <div class="row g-0 m-0 p-0">
                        <h3>Ganhos possíveis  <span class="ganhos-bg"><span class="ganhos">200€</span></span></h3>
                    </div>


                    <div class="row g-0 m-0 p-0 " >
                        <button class="btn btn-primary text-uppercase btn-aposta ">Apostar</button>
                    </div>
                </div>

            </div>


        </div>


    </div>


@endsection
