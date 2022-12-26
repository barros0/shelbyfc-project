@extends('layouts.admin.master')


@section('title', 'Inscrever | Shelby FC')

@section('content')


    <h1>Noticias</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.inscrever.create') }}" class="btn">Adicionar</a>
    </div>
    <table>
        <tbody>
            <tr class="header">
                <th>ID</th>
                <th>Title</th>
                <th>IMG</th>
                <th>Category</th>
                <th>Views</th>
                <th>Actions</th>
            </tr>
            @foreach ($inscrever as $item_db)
                <tr>
                    <td>{{ $item_db->id }}</td>
                    <td>{{ $item_db->name }}</td>
                    <td>{{ $item_db->idade }}</td>
                    <td>{{ $item_db->preco }}</td>
                    <td>
                        <a href="{{ route('admin.inscrever.edit', $new) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.inscrever.destroy', $new) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
