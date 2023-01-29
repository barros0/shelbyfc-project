@extends('layouts.admin.master')


@section('title','News | Shelby FC')

@section('content')


    <h1>Utilizadores</h1>


    <div class="table-responsive">
    <table>
        <tbody>
        <tr class="header">
            <th>#</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Editar</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td> <img style="max-height: 40px" src="{{asset('images/users/'. $user->image)}}" alt=""></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->status }}</td>
            <td><a href="{{route('admin.users.edit',$user->id)}}">
                    <i class="fa fa-pen"></i>
                </a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>

@endsection