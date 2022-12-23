@extends('layouts.admin.master')


@section('title', 'Novo jogo | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.games.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Novo jogo</h1>

    <form action="{{ route('admin.games.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="title_new">Title</label>
                    <input type="text" class="form-control" name="title" id="title_new" placeholder="Enter Title"
                           required>
                </div>
                <div class="form-group">
                    <label for="small_description_new">Small Description</label>
                    <input type="text" class="form-control" name="small_description"
                           placeholder="Enter Small Description" required>
                </div>

                <div class="form-group">
                    <label for="small_description_new">Description</label>
                    <input type="text" class="form-control" name="Description"
                           placeholder="Enter Small Description" required>
                </div>

                <textarea name="body" class="editor"></textarea>


                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" name="image" type="file" id="image" required>
                </div>


                <div class="form-group">
                    <label for="local">Local</label>
                    <input type="text" class="form-control" name="local" id="local" placeholder="Enter Title"
                           required>
                </div>

                <div class="form-group">
                    <label for="bilhetes_disponiveis">Bilhetes disponiveis</label>
                    <input type="checkbox" class="form-control" name="bilhetes_disponiveis" id="bilhetes_disponiveis" placeholder="Enter Title"
                           required>
                </div>

                <div class="form-group">
                    <label for="image">Stock bilhetes</label>
                    <input class="form-control" name="stock_bilhetes" type="number" id="image" required>
                </div>

                <div class="form-group">
                    <label for="data_jogo">Data do jogo</label>
                    <input class="form-control" name="data_jogo" type="datetime-local" id="data_jogo" required>
                </div>


                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
            <div class="col-lg-3">
                <h3>Categorias</h3>
                <div class="form-group">
                    <select name="equipa">
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
    </form>
@endsection
