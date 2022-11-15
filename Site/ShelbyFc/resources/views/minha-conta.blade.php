@extends('layouts.master')

@section('title','ShelbyFC')


@section('content')


    <section class="col-12 container h-100">

        <div class="d-flex">
            <nav class="nav-conta">
                <div class="title">
                    <h1>Definições de conta</h1>
                </div>

                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Perfil
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Subscrições
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Segurança
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Transações
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Preferências
                        </a>
                    </li>
                </ul>

                <div class="logout">
                    <i class="fa fa-off"></i>
                    <p>Sair</p>
                </div>

            </nav>


            <div class="form ">

                <div class="user">

                    <div class="photo">
                        <img src="" alt="">
                        <div class="span edit">
                            <i class="fa fa-pen"></i>
                        </div>
                    </div>

                    <h3 id="name">Pedro Andrade</h3>
                    <h6>Sócio - Subscrição ativa</h6>


                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn">
                        Guardar
                    </button>
                </div>
            </div>

        </div>
    </section>



@endsection
