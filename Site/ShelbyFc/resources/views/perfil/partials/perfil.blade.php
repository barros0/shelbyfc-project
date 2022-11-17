<div class="d-flex justify-content-center justify-itens-center">

    <div>
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

<div class="row">
    <div class="col-lg-6 form-group">
        <label class="form-label" for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>
    <div class="col-lg-6 form-group">
        <label class="form-label" for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    <div class="col-lg-6 form-group">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="col-lg-6 form-group">
        <label class="form-label" for="telefone">Nº telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone">
    </div>
    <div class="col-lg-6 form-group">
        <label class="form-label" for="morada">Morada</label>
        <input class="form-control" type="text" name="morada" id="morada">
    </div>

    <div class="col-lg-6 form-group">
        <label class="form-label" for="distrito">Distrito</label>
        <select class="form-control" type="text" name="distrito" id="distrito">
            <option value="">Distrito 1</option>
        </select>
    </div>


    <div class="col-lg-6 form-group">
        <label class="form-label" for="cod-postal">Código postal</label>
        <input class="form-control" type="text" name="cod-postal" id="cod-postal">
    </div>

    <div class="col-lg-6 form-group">
        <label class="form-label" for="nif">NIF</label>
        <input class="form-control" type="number" name="nif" id="nif">
    </div>
</div>

<div class="col-12 text-center">
    <button type="submit" class="btn">
        <i class="fa-solid fa-floppy-disk"></i>
        Guardar
    </button>
</div>
