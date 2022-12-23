@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')


    <h1>Jogos</h1>

    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.games.create') }}" class="btn">Adicionar</a>
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
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->image }}</td>
                    <td>{{ $game->categorie->name }}</td>
                    <td>{{ $game->views }}</td>
                    <td>
                        <a href="{{ route('admin.games.edit', $game) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.games.destroy', $game) }}" method="post">
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
