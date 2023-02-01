@extends('layouts.admin.master')


@section('title', 'Termos & Condições| Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.terms.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Termo: {!! $term->titulo !!} </h1>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="texto">Texto</label>
            <textarea name="texto" class="editor" required>
                {{$term->texto}}
                </textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <input disabled type="text" class="form-control" value="{{ $term->categoria }}">
        </div>





@endsection
