@extends('layouts.admin.master')


@section('title', 'Faqs | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.faqs.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Editar FaQ</h1>

    <form action="{{ route('admin.faqs.update', $faqs->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-lg-9">
                
                <div class="form-group">
                    <label for="pergunta_faq">Pergunta</label>
                    <input type="text" class="form-control" name="pergunta" id="pergunta_faq" value="{{ $faqs->pergunta }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="resposta_faq">Resposta</label>
                    <input type="text" class="form-control" name="resposta" value="{{ $faqs->resposta }}" required>
                </div>
                <div class="form-group">
                <select name="categoria_id">
                        @foreach ($faqs as $faq)
                        <option value="{{ $faq->categoria }}">{{ $faq->categoria }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
           
    </form>
@endsection
