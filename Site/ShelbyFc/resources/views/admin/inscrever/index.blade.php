@extends('layouts.admin.master')

@section('title', 'Inscrever | Shelby FC')

@section('content')

<a style="font-size:25px;" href="{{ route('admin.inscrever.index') }}"><i class='bx bx-left-arrow-alt'></i></a>

    <h1>Inscrever para Sócio</h1>
    <div class="form-menu d-flex justify-content-between">

        <a href="{{ route('admin.inscrever.create') }}" class="btn">Adicionar</a>
    </div>

    <div class="table-responsive">
        <table class="datatable">
            <thead>
            <tr class="header">
                <th>ID</th>
                <th>Nome</th>
                <th>Idade Min</th>
                <th>Idade Max</th>
                <th>Preço</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inscrever as $preco)
                <tr>
                    <td>{{ $preco->id }}</td>
                    <td>{{ $preco->name }}</td>
                    <td>{{ $preco->min_age }}</td>
                    <td>{{ $preco->max_age }}</td>
                    <td>{{ $preco->preco }}</td>
                    <td>
                        <a href="{{ route('admin.inscrever.edit', $preco) }}" class="btn"><i
                                class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.inscrever.destroy', $preco) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>



@endsection
