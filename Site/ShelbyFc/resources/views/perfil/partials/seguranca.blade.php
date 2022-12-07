<form action="{{route('user.update.password')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-6 form-group">
            <label class="form-label" for="atual_password">Password atual</label>
            <input class="form-control" type="password" name="atual_password" id="atual_password">
        </div>

        <div class="col-lg-6 form-group">
            <label class="form-label" for="nova_password">Nova password</label>
            <input class="form-control" type="password" name="new_password" id="nova_password">
        </div>
        <div class="col-lg-6 form-group">
            <label class="form-label" for="confirmacao_nova_password">Confirmação da nova password</label>
            <input class="form-control" type="password" name="confirmacao_new_password" id="confirmacao_nova_password">
        </div>
    </div>

    <div class="col-12 text-center">
        <button type="submit" class="btn">
            <i class="fa-solid fa-floppy-disk"></i>
            Alterar
        </button>
    </div>
</form>




