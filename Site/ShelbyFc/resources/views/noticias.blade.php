@extends('layouts.master')

@section('title', 'Notícias | Shelby FC')

@section('content')
    <div class="container_all_news">
        <div class="nav_categories">
            <div class="news_from_category">
                <a id="filtros_news" class="{{ Route::is(route('noticias')) ? 'selected_category' : '' }}">Categorias<i class='bx bx-filter'></i></a>
                <a href="{{ route('noticias') }}" class="{{ Route::currentRouteName() == 'noticias' ? 'selected_category' : '' }}">Geral</a>
                @foreach ($categories as $category)
                    <a href="{{ route('news.categorie', [$category->id]) }}"
                        class="{{ url()->current() == route('news.categorie', $category->id) ? 'selected_category' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="news_category">
            @if ($noticias->count() < 1)
                <h2 class="no_news">Não existe nenhuma notícia com esta categoria</h2>
            @else
                @foreach ($noticias as $noticia)
                    <a class="news_body" href="{{ route('NoticiaModal', $noticia->id) }}">
                        <img src="{{ asset('images/noticias/' . $noticia->image) }}" alt="noticia">
                        <div class="date_category">
                            <p class="news_date">{{ $noticia->created_at->format('Y-m-d') }}</p>
                            <p class="newsbody_category">{{ $noticia->categorie->name }}</p>
                        </div>
                        <h2>{{ $noticia->title }}</h2>
                        <p class="new_small_description">{!! $noticia->small_description !!}</p>
                    </a>
                @endforeach
            @endif
        </div>
        <div class="container_news_pages">
            @if ($noticias->hasPages())
                <div class="pagination-wrapper">
                    {{ $noticias->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
    </div>
    <script src="{{ asset('js/news.js') }}"></script>
@endsection
