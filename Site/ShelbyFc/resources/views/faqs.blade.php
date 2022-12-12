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
      <button class="accordion">Sou sócio e já tinha conta na plataforma Shelby FC</button>
      <div class="panel">
        <p>É necessário registar nova conta selecionando a opção Sócio e inserir o seu número.</p>
        <p>Ser-lhe-ão apresentados contactos existentes para validar o acesso.</p>
        <p> No caso de falta de contactos associados, surgirá um alerta para contactar os serviços, através:</p>
        <br>
        <p> <span>Email: </span>suporte@shelbyfc.pt</p>
        <p> <span>Telefone:</span> +351 22 508 33 52</p>
        <br>
      </div>

      <button class="accordion">Sou Sócio e já não tenho acesso aos dados existentes para validação (email e contacto
        inativos)</button>
      <div class="panel">
        <p> No caso de dados inativos contactar os serviços:</p>
        <br>
        <p> <span>Email: </span>suporte@shelbyfc.pt</p>
        <p> <span>Telefone:</span> +351 22 508 33 52</p>
        <br>
      </div>

      <button class="accordion">Sou sócio mas gostaria de iniciar sessão com a minha conta Facebook, Google ou
        Apple</button>
      <div class="panel">
        <p>É necessário registar nova conta.</p>
        <p> O email de registo terá que ser o mesmo da sua conta da plataforma selecionada.</p>
        <br>
      </div>


      <button class="accordion">Os dados preenchidos no formulário de login refletem-se na ficha de sócio?</button>
      <div class="panel">
        <p> Não. Se quiser alterar alguma informação na ficha de sócio contacte os nossos serviços através:</p>
        <br>
        <p> <span>Email: </span>suporte@shelbyfc.pt</p>
        <p> <span>Telefone:</span> +351 22 508 33 52</p>
        <br>
      </div>


      <button class="accordion">Sou sócio mas não me lembro do email associado.</button>
      <div class="panel">
        <p>Contacte, por favor, o serviço de apoio ao Sócio através do e-mail <span> suporte@shelbyfc.pt</span></p>
        <br>
      </div>


      <h1>Criar conta</h1>
      <button class="accordion">Ao autenticar é-me apresentado uma janela de consentimentos, o que fazer?</button>
      <div class="panel">
        <p>É necessário aceitar os consentimentos.</p>
        <br>
      </div>

      <button class="accordion">Requisitos da Senha de acesso</button>
      <div class="panel">
        <p>A senha de acesso deverá ter:</p>
        <br>
        <p>Pelo menos um caracter não alfanumérico (. - ! - # - %)</p>
        <p>Pelo menos um digito (0 - 9 )</p>
        <p>Pelo menos um caracter maiúsculo (A - Z)</p>
        <p>Pelo menos 8 caracteres</p>
        <br>
      </div>

      <button class="accordion">Sou sócio mas gostaria de iniciar sessão com a minha conta Facebook, Google ou
        Apple.</button>
      <div class="panel">
        <p>É necessário registar nova conta.</p>
        <p>O email de registo terá que ser o mesmo da sua conta da plataforma selecionada.</p>
        <br>
      </div>

      <button class="accordion">Ao autenticar apresenta um formulário para validar?</button>
      <div class="panel">
        <p>Deverá seguir as instruções. De seguida terá que selecionar um dos métodos de verificação: SMS ou email.</p>
        <br>
      </div>

      <button class="accordion">Não tenho conta criada. Posso criar uma conta para acesso às plataformas Shelby FC?</button>
      <div class="panel">
        <p>Sim, deverá introduzir um email e password e, de seguida, selecionar "Registar nova conta".</p>
        <br>
      </div>


      <h1>Jogos e Apostas</h1>
      <button class="accordion">De que forma são regulados os jogos de casino da Shelby FC?</button>
      <div class="panel">
        <p>Todos os jogos que estão disponíveis na SHELBY FC são devidamente certificados pela entidade reguladora do jogo online em Portugal, o SRIJ.</p>
        <p>Para além do mais, todos estes jogos são providenciados por entidades certificadas, sendo que o nosso casino não tem qualquer controlo relativamente a quaisquer resultados.</p>
        <p> Sendo assim, os resultados de cada jogada são completamente aleatórios e independentes da SHELBY FC.</p>
        <br>
      </div>
      
      <button class="accordion">Como faço uma aposta desportiva?</button>
      <div class="panel">
        <p>Para colocar uma aposta desportiva, tens de escolher pelo menos uma seleção para que esta seja adicionada ao boletim de apostas.</p>
        <p>Seguidamente, deves definir o valor que pretendes apostar no boletim de apostas.</p>
        <p>Podes colocar apostas simples (com apenas uma seleção), múltiplas (com várias seleções) ou combinadas (que englobam várias combinações de apostas múltiplas e simples).</p>
        <p>No boletim de apostas encontrarás informação relevante sobre a tua aposta, como o valor da odd, o custo da aposta e os ganhos potenciais. No nosso blog temos um artigo sobre as diferenças entre os tipos de apostas que te poderá ajudar a decidir.</p>
        <br>
      </div>


      <button class="accordion">O que são odds?</button>
      <div class="panel">
        <p>Odds (ou "cotas") são valores numéricos que são atribuídos a um determinado evento, consoante a probabilidade de o mesmo ocorrer. Quanto mais improvável for o resultado, maior será a odd. Comparativamente, quanto mais provável for o resultado, menor será o seu valor.</p>
        <p>É importante mencionar que o valor de uma odd não é estático, variando desde o momento em que é criada até ao momento em que já não está disponível.</p>
        <p>As odds permitem calcular o prémio oferecido ao jogador, servindo de "multiplicador" da aposta: quando colocas uma aposta, o valor da odd será multiplicado pelo valor da tua aposta de forma a obteres o valor dos teus ganhos.</p>
        <p>Por exemplo, se a odd da seleção em que apostares for de 2.50, e o valor apostado for €10, os teus ganhos serão de €25 (no caso de uma aposta bem sucedida).</p>
        <br>
      </div>


      
      <h1>Depósitos e Levantamentos</h1>
      <button class="accordion">Qual o valor mínimo que poderei depositar e levantar?</button>
      <div class="panel">
        <p>O valor mínimo de depósito é de 10€. O valor mínimo de levantamento é de 0,01€.</p>
        <br>
      </div>

      <button class="accordion">Quais são os Métodos de Pagamento disponíveis na Shelby FC?</button>
      <div class="panel">
        <p>Na Shelby FC, podes efetuar depósitos através de Multibanco, MB WAY, Maestro, Visa, Mastercard, Skrill, Netteler, Paypal e Paysafecard.</p>
        <p>No que diz respeito aos levantamentos, poderão ser feitos através de Cartão de Crédito Visa, transferência bancária/SEPA, Skrill, Neteller e Paypal.</p>
        <p>Caso não encontres o método que queres utilizar, por favor contacta o Serviço de Apoio ao Cliente.</p>
        <br>
      </div>

      <button class="accordion">Os meus depósitos terão taxas associadas?</button>
      <div class="panel">
        <p>Não, os teus depósitos não terão qualquer encargo para ti por parte da Shelby FC. Contudo, poderão existir taxas aplicadas pelo teu banco ou método de pagamento, aos quais a Shelby FC é alheia.</p>
        <p>Por favor, informa-te junto do teu banco ou método de pagamento relativamente às mesmas.</p>
        <br>
      </div>

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