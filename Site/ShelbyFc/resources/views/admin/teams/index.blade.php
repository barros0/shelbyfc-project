@extends('layouts.admin.master')


@section('title', 'Equipas | Shelby FC')

@section('content')

    <h1>Equipas</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.teams.create') }}" class="btn">Adicionar</a>
    </div>

    <div class="table-responsive">
    <table class="datatable">
        <thead>
            <tr class="header">
                <th>ID</th>
                <th>Imagem</th>
                <th>name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td><img style="width: 60px" src="{{asset('images/liga/'.$team->image)}}" alt=""></td>
                    <td>{{ $team->name }}</td>
                    <td>
                        <a href="{{ route('admin.teams.edit', $team) }}" class="btn"><i
                                class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.teams.destroy', $team) }}" method="post">
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
