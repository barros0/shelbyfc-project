@extends('layouts.master')

@section('title', 'Noticias - Shelby FC')

@section('content')
    <div class="container_all_news">
        <div class="nav_categories">
            <div class="news_from_category">
                <a href="" class="selected_category">Geral</a>
                @foreach ($categories as $category)
                    <a href="">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="news_category">
            @foreach ($noticias as $noticia)
                <div class="news_body">
                    <img src="{{ asset('images/noticias/' . $noticia->image) }}" alt="noticia">
                    <div class="date_category">
                        <p class="news_date">15 Jun 2022</p>
                        <p class="newsbody_category">{{ $noticia->name }}</p>
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
