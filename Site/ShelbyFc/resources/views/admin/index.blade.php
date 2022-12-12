@extends('layouts.admin.master')


@section('title','Dashboard | Shelby FC')

@section('content')


    <h1>Bem vindo, {{Auth::user()->name}}!</h1>



@endsection
