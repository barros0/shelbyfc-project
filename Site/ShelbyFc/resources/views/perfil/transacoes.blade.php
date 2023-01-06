@extends('layouts.perfil')

@section('content-perfil')

@if(empty(Auth::user()->transactions))

    <div class="alert-profile">
    <h4>Você ainda não fez nenhuma transação</h4>
    </div>

@else


    <table>
        <tbody>
        <tr class="header">
            <th>#</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data</th>
        </tr>
        @foreach(Auth::user()->transactions as $transacao)
        <tr>
            <td>{{$transacao->id}}</td>
            <td>{{$transacao->description}}</td>
            <td>{{$transacao->value}}€</td>
            <td>{{$transacao->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endif
@endsection
