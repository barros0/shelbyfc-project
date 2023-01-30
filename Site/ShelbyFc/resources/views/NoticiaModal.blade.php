@extends('layouts.master')

@section('title', 'Notícias - Shelby FC')

@section('content')
    <div class="content_noticia container">
        <img class="img_thumb" src="{{ asset('images/noticias/' . $noticia->image) }}" alt="">
        <p class="single_noticia">{{ $noticia->categorie->name }}</p>
        <h1>{{ $noticia->title }}</h1>
        <h3>{{ $noticia->small_description }}</h3>
        <p>{!! $noticia->body !!}</p>
    </div>
@endsection
