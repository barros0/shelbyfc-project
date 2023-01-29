@extends('layouts.master')

@section('title','Termos & Condições | ShelbyFC')

@include('partials.head')

@section('content')

<div class="conteudo-terms">
    <div class="imagem-inicio">

        <div class="parte-baixo-banner">
            <div class="texto-banner">Termos & Condições</div>
            <p>Aqui pode encontrar os nossos termos e condições</p>
        </div>
    </div>

    <div class="term-section">
        <div class="term-box">
            <div class="box-title">
                <h2>Term & Conditions</h2>
            </div>
            <div class="box-content">
                

                @foreach ($terms as $term)
                @if ($term->categoria == 'property')
                     <h6>{!! $term->titulo !!}</h6>
                @endif
                    <p>{!! $term->texto !!}</p>
            @endforeach



            </div>
        </div>
    </div>



</div>

@endsection