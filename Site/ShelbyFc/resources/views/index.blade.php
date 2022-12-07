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
@endsection