@extends("layouts.master")

@section('title','Noticias - Shelby FC')

@section('content')
<div class="container_all_news">
    <div class="nav_categories">
        <div class="news_from_category">
            <a href="" id="categoria1" class="selected_category">Segunda Liga</a>
            <a href="" id="categoria2">Bilhetes</a>
            <a href="" id="categoria3">Relatório de Jogo</a>
            <a href="" id="categoria4">Pré-Visualização de Jogo</a>
        </div>
    </div>
    <div class="news_category">
        @foreach ($noticias as $noticia)
        <div class="news_body">
            <img src="{{asset('images/noticias/'. $noticia->image)}}" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Segunda Liga</p>
            </div>
            <h2>{{ $noticia->title }}</h2>
            <p class="new_small_description">{!! $noticia->small_description !!}</p>
        </div>
        @endforeach
    </div>
    <div class="container_news_pages">
        <p class="arrows">&#x3c;</p>
        <div class="news_pages">
            <p class="pages" id="page_selected">1</p>
            <p class="pages">2</p>
            <p class="pages">3</p>
            <p class="pages">4</p>
        </div>
        <p class="arrows">&#x3e;</p>
    </div>
</div>
@endsection