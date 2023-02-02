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
                <th>Subscrições</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subscriptions as $subscription)
                <tr>
                    <td>{{ $subscription->id }}</td>
                    <td><img style="max-height: 40px" src="{{asset('images/users/'. $subscription->DadosUser->image)}}" alt=""></td>
                    <td>{{ $subscription->name }}</td>
                    <td>{{ $subscription->email }}</td>
                    <td>{{ $subscription->state }}</td>
                    <td>{{ $subscription->created_at }}</td>
                    <td>{{ $subscription->expires_at }}</td>
                    <td>
                            <a href="{{route('admin.subscriptions.show', $subscription) }}" class="btn">Visualizar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
