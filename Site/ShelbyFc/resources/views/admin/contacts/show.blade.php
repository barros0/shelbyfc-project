@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')


    <h1>Contacto de: {{$contact->name}}</h1>
<small>{{$contact->created_at}}</small>

        <div class="row">
            <div class="col-12">
                <h4>{{$contact->subject}}</h4>
                <h5>{{$contact->email}}</h5>
                <h6>{{$contact->phone}}</h6>

                <p>{{$contact->message}}</p>

            </div>

@endsection
