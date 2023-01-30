@extends('layouts.admin.master')


@section('title', 'Categories | Shelby FC')

@section('content')

    <h1>Categories</h1>
    <div class="form-menu d-flex justify-content-between">
        <a href="{{ route('admin.categories.create') }}" class="btn">Adicionar</a>
    </div>
    <div class="table-responsive">
    <table class="datatable">
       <thead>
            <tr class="header">
                <th>ID</th>
                <th>name</th>
                <th>Actions</th>
            </tr></thead> <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn"><i
                                class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
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
