@extends('layouts.master')

@section('title','ShelbyFC')


@section('content')
<div class="container_main_new">
    <div class="mask-gradient">
        <img src="{{asset('images/noticias/gqwtqj3dtpbpe6oerjcw.jpg')}}" alt="#">
    </div>
    <div class="container_new">
        <div class="news_details">
            <h1 id="news_title">PRESS ROOM POST SHELBY FC vs LAZIO INTERVIEWS</h1>
            <div class="news_btn_date">
                <button>Ler Mais</button>
                <p id="news_date">15 Jun 2022</p>
            </div>
        </div>
        <div class="news_options">
            <div class="option" id="noticia1">
                <p>15 Jun 2022</p>
                <h3>UNDER 19 | ROME-SHELBYFC, THE GAME</h3>
            </div>
            <div class="option selected" id="noticia2">
                <p>20 Mar 2022</p>
                <h3>PRESS ROOM POST SHELBY FC vs LAZIO INTERVIEWS</h3>
            </div>
            <div class="option" id="noticia3">
                <p>30 Agos 2022</p>
                <h3>WOMEN, WE START FROM TARDINI! PARMA HEAD</h3>
            </div>
        </div>
    </div>
</div>
<div class="container_last_matches">
    <div class="match">
        <div class="match_home d-flex flex-column justify-content-between align-items-center">
            <img src="{{asset('images/liga/estrela_da_amadora.png')}}" alt="logo-estrela_da_amadora">
            <p class="team_name">Estrela da Amadora</p>
        </div>
        <div class="match_info">
            <p>Amigável</p>
            <div class="score">
                <p class="score_home">2</p>
                <p class="score_away">2</p>
            </div>
            <p>15 Jun 2022</p>
        </div>
        <div class="match_away d-flex flex-column justify-content-between align-items-center">
            <img src="{{asset('images/liga/shelby_fc.png')}}" alt="logo-shelby">
            <p class="team_name">Shelby FC</p>
        </div>
    </div>
    <div class="separador"></div>
    <div class="match">
        <div class="match_home d-flex flex-column justify-content-between align-items-center">
            <img src="{{asset('images/liga/UD_Oliveirense.png')}}" alt="logo-UD_Oliveirense">
            <p class="team_name">Oliveirense</p>
        </div>
        <div class="match_info">
            <p>Amigável</p>
            <div class="score">
                <p class="score_home">0</p>
                <p class="score_away">3</p>
            </div>
            <p>15 Jun 2022</p>
        </div>
        <div class="match_away d-flex flex-column justify-content-between align-items-center">
            <img src="{{asset('images/liga/shelby_fc.png')}}" alt="logo-shelby">
            <p class="team_name">Shelby FC</p>
        </div>
    </div>
</div>
<a class="see_more" href="">Ver mais &#x2192;</a>
@endsection