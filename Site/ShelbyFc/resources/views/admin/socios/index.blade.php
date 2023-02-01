@extends('layouts.admin.master')


@section('title','Subscrições | Shelby FC')

@section('content')


    <h1>Subscrições</h1>


    <div class="table-responsive">
        <table class="datatable">
            <thead>
            <tr class="header">
                <th>User ID</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Estado Subscrição</th>
                <th>Início Subscrição</th>
                <th>Fim Subscrição</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users_subscribed as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><img style="max-height: 40px" src="{{asset('images/users/'. $user->DadosUser->image)}}" alt=""></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->expires_at }}</td>
                    <td>
                        @if($user->state != 'Ativa')
                        <a href="{{route('admin.socios.show', $user) }}" class="btn">Aprovar / Negar</a>
                        @else
                        <a href="{{route('admin.socios.show', $user) }}" class="btn">Visualizar</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
