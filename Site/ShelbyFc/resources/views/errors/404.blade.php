@extends('layouts.master')

@section('title', 'Error 404 | Shelby FC')

@section('content')
<div class="conteudo-pagina">
    <div class="caixa-erro">
        <div class="left-side">
            <p>404</p>
        </div>
        <div class="right">
            <h6>Página não encontrada</h6><br>
            <button onclick="location.href='{{ route('index') }}'" type="button">Voltar para o Estádio</button>
        </div>
    </div>
   
</div>
@endsection