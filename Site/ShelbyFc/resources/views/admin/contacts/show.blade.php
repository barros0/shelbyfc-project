@extends('layouts.admin.master')


@section('title', 'Contactos | Shelby FC')

@section('content')


    <h1>Contacto de {{$contact->name}} </h1>
    <p>ás {{$contact->created_at}}</p>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input disabled type="text" class="form-control" value="{{ $contact->email }}">
        </div>

        <div class="form-group col-md-6">
            <label for="email">Telefone</label>
            <input disabled type="text" class="form-control" value="{{ $contact->phone }}">
        </div>


        <div class="form-group col-12">
            <label for="email">Assunto</label>
            <input disabled type="text" class="form-control" value="{{ $contact->subject }}">
        </div>

        <div class="form-group col-12">
            <label for="email">Mensagem</label>
            <textarea disabled type="text" class="form-control">{{ $contact->message }}</textarea>
        </div>



@endsection
