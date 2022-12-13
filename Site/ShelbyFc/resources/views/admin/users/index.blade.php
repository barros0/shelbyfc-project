@extends('layouts.admin.master')


@section('title','News | Shelby FC')

@section('content')


    <h1>Utilizadores</h1>


    <table>
        <tbody>
        <tr class="header">
            <th>#</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Estado</th>
            <th>x</th>
            <th>x</th>
            <th>x</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td> <img style="max-height: 40px" src="{{asset('images/users/'. $user->image)}}" alt=""></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->status }}</td>
            <td>{{ $user->price }}</td>
            <td>{{ $user->price }}</td>
            <td>{{ $user->price }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>



@endsection
