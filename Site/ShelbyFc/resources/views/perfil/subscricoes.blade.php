@extends('layouts.perfil')

@section('content-perfil')

    @if(empty($subscricoes))

        <div class="alert-profile">
            <h4>Você ainda não fez nenhuma subscrição</h4>
        </div>

    @else

        <table>
            <tbody>
            <tr class="header">
                <th>#</th>
                <th>Estado</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Expira/ou</th>
            </tr>
            @foreach($subscricoes as $subscricao)
                <tr>
                    <td>{{$subscricao->id}}</td>
                    <td>{{$subscricao->state}}</td>
                    <td>{{$subscricao->value}}</td>
                    <td>{{$subscricao->created_at}}</td>
                    <td>{{$subscricao->expires_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
@endsection
