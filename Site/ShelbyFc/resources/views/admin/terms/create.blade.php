@extends('layouts.admin.master')


@section('title', 'Terms & Conditions | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.terms.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Criar Term</h1>

    <form action="{{ route('admin.terms.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="titulo_term">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo_term" placeholder="titulo"
                        required>
                </div>
                <div class="form-group">
                    <label for="texto_term">Texto</label>
                    <textarea name="texto" class="editor" required>
                </textarea>

                <div class="form-group">
                    <label for="categoria_term">Categoria</label>
                    <select name="categoria">
                            <option value="property">Property of Website</option>
                            <option value="privacy">Privacy</option>
                            <option value="intellectual">Intellectual Property</option>
                            <option value="resposibility">Resposibility</option>
                            <option value="registration">Registration</option>
                            <option value="user">Responsibility of the User</option>
                            <option value="sale">Sale of retail goods and services through the website</option>
                            <option value="member">Shelby FC Member</option>
                            <option value="ticket">Shelby FC Season Ticket</option>
                            <option value="purchase_sale">Purchase and Sale of Tickets</option>
                            <option value="final_consideration">Final Considerations</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>

                </div>
            </div>
    </form>
@endsection