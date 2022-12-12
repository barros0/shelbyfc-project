@extends("layouts.master")

@section('title','FaQS - Shelby FC')

@section('content')
<div class="conteudo-faqs">
    <div class="imagem-inicio">

      <div class="parte-baixo-banner">
        <div class="texto-banner">Apoio ao Cliente</div>
        <p>Encontre aqui a resposta a todas as suas questões</p>
      </div>
    </div>


    <div class="section-faqs">
      <h1>Informações de sócio</h1>
      @foreach ($faqs as $faq)
      <button class="accordion">{!! $faq->pergunta !!}</button>
      <div class="panel">
      <p>{!!  $faq->resposta !!}</p>
      <br>
      </div>
     
      @endforeach
      
      



      <h1>Criar conta</h1>
     


      <h1>Jogos e Apostas</h1>
      


      
      <h1>Depósitos e Levantamentos</h1>
      

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
            <button type="button" class="btn-send">Enviar Mensagem</button>
          </div>
        </div>
        <div class="lado-direito"></div>

      </div>

    </div>

  

@endsection