@extends('layouts.master')

@section('title', 'FaQS | Shelby FC')

@section('content')
<div class="conteudo-faqs">
    <div class="imagem-inicio">

        <div class="parte-baixo-banner">
            <div class="texto-banner">Apoio ao Cliente</div>
            <p>Encontre aqui a resposta a todas as suas questões</p>
        </div>
    </div>


    <div class="section-faqs container">
        <h1>Informações de sócio</h1>
        @foreach ($faqs as $faq)
        @if ($faq->categoria == 'informacoes')
        <button class="accordion">{!! $faq->pergunta !!}</button>
        @endif
        <div class="panel">
            <p>{!! $faq->resposta !!}</p>
            <br>
        </div>
        @endforeach





        <h1>Criar conta</h1>
        @foreach ($faqs as $faq)
        @if ($faq->categoria == 'criar_conta')
        <button class="accordion">{!! $faq->pergunta !!}</button>
        @endif
        <div class="panel">
            <p>{!! $faq->resposta !!}</p>
            <br>
        </div>
        @endforeach




        <h1>Jogos e Apostas</h1>
        @foreach ($faqs as $faq)
        @if ($faq->categoria == 'jogos_apostas')
        <button class="accordion">{!! $faq->pergunta !!}</button>
        @endif
        <div class="panel">
            <p>{!! $faq->resposta !!}</p>
            <br>
        </div>
        @endforeach





        <h1>Depósitos e Levantamentos</h1>
        @foreach ($faqs as $faq)
        @if ($faq->categoria == 'depositos_levantamentos')
        <button class="accordion">{!! $faq->pergunta !!}</button>
        @endif
        <div class="panel">
            <p>{!! $faq->resposta !!}</p>
            <br>
        </div>
        @endforeach



    </div>

    <div class="fale-conosco">
        <div class="imagem-fale-conosco">
            <div class="lado-esquerdo">
                <div class="titulo-fale-conosco">
                    <p> Fale Connosco</p>
                </div>
                <div class="texto-fale-conosco">
                    <p>Para entrar em contacto connosco clique, por favor,</p>
                    <p> no botão para enviar a sua mensagem.</p>
                </div>
                <div class="btn-section">
                    <button type="button" onclick="location.href='{{ route('contacts') }}'" class="btn-send">Enviar
                        Mensagem</button>
                </div>
            </div>
            <div class="lado-direito"></div>

        </div>

    </div>
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                panel.classList.remove("active2");
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.classList.add("active2");
            }
        });
    }
    </script>
    @endsection