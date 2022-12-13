@extends('layouts.perfil')

@section('perfil.active','perfil')

@section('content-perfil')
    <div class="d-flex justify-content-center justify-itens-center">

        <div class="photo-edit-wrap">
            <div class="photo">
                <img src="{{asset('images/users/'. Auth::user()->image)}}" alt="Image profile">
            </div>

            <form action="">
                <label for="photo_profile">
                    <div class="span edit">
                        <i class="fa fa-pen"></i>
                    </div>

                </label>
            </form>
        </div>

        <div class="info">
            <h3 id="name">{{Auth::user()->name}}</h3>
            @if(Auth::user()->subscribed)
                <h6>Sócio - Subscrição ativa</h6>
            @else
                <h6>Sem subscrição ativa</h6>
            @endif

            <a class="btn-remove" href="">Remover</a>
        </div>
    </div>

    <form class="form-profile" action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input hidden onchange="this.form.submit()" type="file" id="photo_profile" name="foto_perfil">
        <div class="row">
            <div class="col-lg-6 form-group">
                <label class="form-label" for="nome">Nome</label>
                <input class="" type="text" name="nome" id="nome" value="{{Auth::user()->name}}">
            </div>
            <div class="col-lg-6 form-group">
                <label class="form-label" for="email">Email</label>
                <input class="" type="email" name="email" id="email" disabled value="{{Auth::user()->email}}">
            </div>
            <div class="col-lg-6 form-group">
                <label class="form-label" for="telefone">Nº telefone</label>
                <input class="" type="text" name="telefone" id="telefone" value="{{Auth::user()->phone}}">
            </div>

            <div class="col-lg-6 form-group">
                <label class="form-label" for="cidade">Cidade</label>
                <input class="" type="text" name="cidade" id="cidade" value="{{Auth::user()->city}}">
            </div>

            <div class="col-lg-6 form-group">
                <label class="form-label" for="morada">Morada</label>
                <input class="" type="text" name="morada" id="morada" value="{{Auth::user()->address}}">
            </div>

            <div class="col-lg-6 form-group">
                <label class="form-label" for="pais">Pais</label>
                <select class="" name="pais" id="pais">
                    <option value="">Selecione o seu pais</option>
                    @foreach($countrys as $country)
                        <option
                            @if($country->id == Auth::user()->country_id)
                            selected
                            @endif
                            value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-lg-6 form-group">
                <label class="form-label" for="codigo_postal">Código postal</label>
                <input class="" type="text" name="codigo_postal" id="codigo_postal"
                       value="{{Auth::user()->postal_code}}">
            </div>

            <div class="col-lg-6 form-group">
                <label class="form-label" for="nif">NIF</label>
                <input class="" type="text" name="nif" id="nif" value="{{Auth::user()->nif}}">
            </div>

            <div class="col-lg-6 form-group">
                <label class="form-label" for="morada">Nascimento</label>
                <input class="" type="date" name="nascimento" id="nascimento" value="{{Auth::user()->birthdate}}">
            </div>

            <div class="col-lg-6 text-center">
                <div>
                    <button type="submit" class="btn bt-fix">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection

