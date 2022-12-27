@extends('layouts.master')

@section('title', 'ShelbyFC')


@section('content')
    <div class="container_main_new">
        <div class="mask-gradient">
            <img id="image" src="{{ asset('images/noticias/') }}" alt="image">
        </div>
        <div class="container_new">
            <div class="news_details">
                <h1 id="news_title"></h1>
                <div class="news_btn_date">
                    <button>Ler Mais</button>
                    <p id="news_date"></p>
                </div>
            </div>
            <div class="news_options">
                @foreach ($noticias->take(3) as $noticia)
                    <div class="option" id="option{{ $id_js = $id_js + 1 }}">
                        <p id="image{{ $id_image_js = $id_image_js + 1 }}" style="display:none;">{{ $noticia->image }}</p>
                        <p id="date{{ $id_date_js = $id_date_js + 1 }}">{{ $noticia->created_at->format('Y-m-d') }}</p>
                        <h3 id="text{{ $id_text_js = $id_text_js + 1 }}">{{ $noticia->title }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a class="see_more" href="">Ver mais &#x2192;</a>
    <div class="container_last_matches">
        <div class="match">
            <div class="match_home d-flex flex-column justify-content-between align-items-center">
                <img src="{{ asset('images/liga/estrela_da_amadora.png') }}" alt="logo-estrela_da_amadora">
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
                <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="logo-shelby">
                <p class="team_name">Shelby FC</p>
            </div>
        </div>
        <div class="separador"></div>
        <div class="match">
            <div class="match_home d-flex flex-column justify-content-between align-items-center">
                <img src="{{ asset('images/liga/UD_Oliveirense.png') }}" alt="logo-UD_Oliveirense">
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
                <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="logo-shelby">
                <p class="team_name">Shelby FC</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/index.js') }}"></script>

@endsection
