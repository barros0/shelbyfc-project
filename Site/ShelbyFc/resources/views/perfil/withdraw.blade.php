@extends('layouts.perfil')

@section('perfil.active','perfil')

@section('content-perfil')
    <div class="d-flex justify-content-center-no justify-itens-center">

        <form class="form-profile" action="{{route('dowithdraw')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                  <h5>Saldo atual: {{Auth::user()->balance}}€</h5>
                <p class="text-danger">Minimo de levantamento: 10€</p>
                <p>Insira o IBAN da conta bancária para onde pretende que enviemos o seu saldo:</p>

                <div class="col-12 form-group">
                    <label class="form-label" for="iban">IBAN</label>
                    <input class="" type="text" name="iban" id="iban" value="">
                </div>

                <div class="col-lg-6 text-center">
                    <div>
                        <button type="submit" class="btn bt-fix">
                            Levantar
                        </button>
                    </div>
                </div>
            </div>
        </form>

@endsection

