@extends('layouts.master')

@section('title', 'ShelbyFC')


@section('content')
    <div class="container_main_new">
        <div class="mask-gradient">
            <img id="image" src="" alt="image">
        </div>
        <div class="container_new">
            <div class="news_details">
                <h1 id="news_title"></h1>
                <div class="news_btn_date">
                    <a href="" id="button_href">Ler Mais</a>
                    <p id="news_date"></p>
                </div>
            </div>
            <div class="news_options">
                @foreach ($noticias as $noticia)
                    <div class="option" id="option{{ $noticia->id }}">
                        <p id="image{{ $noticia->id }}" style="display:none;">{{ $noticia->image }}</p>
                        <p id="href_link{{ $noticia->id }}" style="display:none;">{{ $noticia->id }}</p>
                        <p id="date{{ $noticia->id }}">{{ $noticia->created_at->format('Y-m-d') }}</p>
                        <h3 id="text{{ $noticia->id }}">{{ $noticia->title }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="see_more_div">
        <a class="see_more" href="{{ route('resultados') }}">Ver mais &#x2192;</a>
    </div>
    <div class="container_last_matches">
        @foreach ($proximos_jogos as $proximo_jogo)
                <div class="match">
                    <div class="match_home d-flex flex-column justify-content-between align-items-center">
                        <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="logo-shelby_fc.png">
                        <p class="team_name">Shelby FC</p>
                    </div>
                    <div class="match_info">
                        <p>{{ $proximo_jogo->location }}</p>
                        <div class="score">
                            <p class="score_home">{{ $proximo_jogo->result_home }}</p>
                            <p class="score_away">{{ $proximo_jogo->result_opponent }}</p>
                        </div>
                        <p>{{ $data = date('d M y', strtotime($proximo_jogo->datetime_game)) }}</p>
                    </div>
                    <div class="match_away d-flex flex-column justify-content-between align-items-center">
                        <img src="{{ asset('images/liga/' . $proximo_jogo->opponent->image) }}"
                            alt="{{ $proximo_jogo->opponent->name }}">
                        <p class="team_name">{{ $proximo_jogo->opponent->name }}</p>
                    </div>
                </div>
                <div class="separador"></div>
        @endforeach
    </div>

    <div class="container">

        <div class="col-12 text-center">
         <div class="col-12">
             <h3>Há 20 anos a fazer magia no futebol!</h3>
         </div>
           <div class="col-12">
               <p>Conheça a história do ex-jogador de sucesso do shelby!</p>
           </div>
        </div>

      <div class="d-flex justify-content-center">
     <div class="videoyt">
         <iframe style="max-width: 100%" width="660" height="415" src="https://www.youtube.com/embed/IzQB4uqt_sQ"
                 title="Shelby FC video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

     </div>
      </div>
          </div>


    <div class="vantagens_index">
        <h1 class="tit-vant">ASSINA PELO SHELBY</h1>
        <div class="row-vant-index">
            <div class="vantagem">
                <i class="bx bxs-discount icon-vant"></i>
                <span class="texto-vant">DESCONTOS NA LOJA</span>
            </div>
            <div class="vantagem">
                <i class="bx bxs-trophy icon-vant"></i>
                <span class="texto-vant">PRÉMIOS E PASSATEMPOS</span>
            </div>
            <div class="vantagem">
                <i class="bx bx-dumbbell icon-vant"></i>
                <span class="texto-vant">UTILIZAÇÃO DAS INSTALAÇÕES</span>
            </div>
        </div>
        <a class="button_socio_index" href="{{ route('inscrever') }}">Adere Já</a>
    </div>

@endsection
