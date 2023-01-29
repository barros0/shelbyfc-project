@extends('layouts.admin.master')


@section('title','News | Shelby FC')

@section('content')


    <h1>Transferências de saldo</h1>


    <div class="table-responsive">
        <table class="datatable">
            <thead>
            <tr class="header">
                <th>#</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>Ver</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($withdraws as $withdraw)
                <tr>
                    <td>{{ $withdraw->id }}</td>
                    <td>{{ $withdraw->user->name }}</td>
                    <td>{{ $withdraw->value }}€</td>
                    <td>
                        @if($withdraw->complete)
                            <p class="btn-success">
                                Completo
                            </p>
                        @else
                            <p class="btn-warning">
                                Pendente
                            </p>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.withdraw.show',$withdraw->id)}}">
                            <i class="fa fa-eye"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
