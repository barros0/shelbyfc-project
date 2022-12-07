<div class="d-flex justify-content-center justify-itens-center">

    <div class="photo-edit-wrap">
        <div class="photo">
            <img src="{{asset('images/users/pedro.png')}}" alt="Image profile">
        </div>
        <div class="span edit">
            <i class="fa fa-pen"></i>
        </div>
    </div>

    <div class="info">
        <h3 id="name">Pedro Andrade</h3>
        <h6>Sócio - Subscrição ativa</h6>
        <a class="btn-remove" href="">Remover</a>
    </div>
</div>

<form class="form-profile" action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
    @csrf

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
            <label class="form-label" for="morada">Morada</label>
            <input class="" type="text" name="morada" id="morada" value="{{Auth::user()->address}}">
        </div>

        <div class="col-lg-6 form-group">
            <label class="form-label" for="distrito">Pais</label>
            <select class="" name="distrito" id="distrito">
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
            <label class="form-label" for="cod-postal">Código postal</label>
            <input class="" type="text" name="cod-postal" id="cod-postal"
                   value="{{Auth::user()->postal_code}}">
        </div>

        <div class="col-lg-6 form-group">
            <label class="form-label" for="nif">NIF</label>
            <input class="" type="number" name="nif" id="nif" value="{{Auth::user()->nif}}">
        </div>
    </div>
</form>


<div class="col-12 text-center">
    <button type="submit" class="btn">
        Guardar
    </button>
</div>
