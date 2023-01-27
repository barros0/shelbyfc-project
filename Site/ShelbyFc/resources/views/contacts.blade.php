@extends('layouts.master')

@section('title','Contactos | ShelbyFC')

@include('partials.head')

@section('content')

<div class="conteudo-contactos">
    <div class="imagem-inicio">

        <div class="parte-baixo-banner">
            <div class="texto-banner">CONTACTA-NOS</div>
            <p>Encontre aqui mais informações de como nos pode contactar</p>
        </div>
    </div>


    <div class="contact-section container">
        <div class="row">
        <div class="left-side col-md-6">
            <div class="up-side">
                <h2>Vamos entrar em contacto?</h2>
                <p>Estamos disponiveis para o ajudar da melhor maneira.</p>
            </div>

            <div class="row">
            <div class="down-side">

                <div class="ret" id="ret1"><i class='bx bxs-phone-call'></i>
                    <p>+351 986 457 210</p>
                </div>
                <div class="ret" id="ret2"><i class='bx bxs-envelope'></i>
                    <p>support@shelbyfc.com</p>
                </div>
                <div class="ret" id="ret3"><i class='bx bxs-home'></i>
                    <p>R. Gen. Norton de Matos Apartado 4133</p><br>
                    <p> 2411-901 Leiria</p>
                </div>

            </div>
        </div>
        </div>
        <div class="right-side col-md-6">
            <form action="{{ route('contacts.create') }}" method="post" enctype="multipart/form-data" class="form-contact">
              @method('post')
                @csrf
                <div class="top-form">
                    <div class="input-icons">
                        <i class='bx bx-user'></i>
                        <input class="input-field" type="text" id="nome" name="name" placeholder="Nome" required value="">
                    </div>
                    <div class="input-icons">
                        <i class='bx bx-phone'></i>
                        <input class="input-field" type="text" id="telefone" name="phone" placeholder="Telefone"
                            required>
                    </div>
                </div>
                <div class="input-icons">
                    <i class='bx bx-envelope'></i>
                    <input class="input-field" type="text" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-icons">
                    <i class='bx bx-captions'></i>
                    <input class="input-field" type="text" id="assunto" name="subject" placeholder="Assunto" required>
                </div>
                <textarea id="mensagem" name="message" rows="4" cols="50" placeholder="Em que podemos ajudar?"
                    required></textarea>
                <input type="submit" class="btn" value="Enviar Mensagem">
            </form>
        </div>
        </div>
    </div>

</div>

@endsection
