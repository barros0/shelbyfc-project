@extends('layouts.admin.master')

@section('title', 'Inscrever | Shelby FC')

@section('content')


    <h1>Inscrever para Sócio</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.inscrever.create') }}" class="btn">Adicionar</a>
    </div>

    <div class="table-responsive">
        <table class="datatable">
            <thead>
            <tr class="header">
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Preço</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inscrever as $item_db)
                <tr>
                    <td>{{ $item_db->id }}</td>
                    <td>{{ $item_db->name }}</td>
                    <td>{{ $item_db->idade }}</td>
                    <td>{{ $item_db->preco }}</td>
                    <td>
                        <a href="{{ route('admin.inscrever.edit', $item_db) }}" class="btn"><i
                                class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.inscrever.destroy', $item_db) }}" method="post">
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
