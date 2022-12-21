@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')

    <h1>Categories</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="" class="btn">Adicionar</a>
    </div>
    <table>
        <tbody>
            <tr class="header">
                <th>ID</th>
                <th>name</th>
                <th>Actions</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <a href="" class="btn"><i class='bx bx-trash'></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection