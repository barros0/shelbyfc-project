@extends("layouts.master");

@section('title','Inscrever - Shelby FC')

@section('content')

<div class="background-foto">
<h1 class="tit-principal">NÃO FIQUES NO ESCURO.<br>ACENDE A TUA CHAMA.</h1>
<img src="{{ asset('images/inscrever/credit-card.png') }}" alt="Cartão Sócio" class="cartao-socio">
<a class="botao-inscreve" href="#inscrever">INSCREVER SÓCIO</a>
</div>

<div class="vantagens">
    <h1 class="tit-vant">UM CARTÃO...</h1>
    <div class="row-vant">
        <div class="vantagem">
            <i class='bx bxs-discount icon-vant'></i>
            <span class="texto-vant">DESCONTOS NA LOJA</span>
        </div>
        <div class="vantagem">
            <i class='bx bxs-trophy icon-vant' ></i>
            <span class="texto-vant">PRÉMIOS E PASSATEMPOS</span>

        </div>
        <div class="vantagem">
            <i class='bx bx-dumbbell icon-vant' ></i>
            <span class="texto-vant">UTILIZAÇÃO DAS INSTALAÇÕES</span>

        </div>
    </div>
    <h1 class="tit-vant">...CENTENAS DE VANTAGENS</h1>

</div>

<div id="inscrever" class="fullpage-row">
    <div class="metade">
        
        <h1>INSCRIÇÃO PARA SÓCIO</h1>

        <div class="login-regular">
            <form action="login.html">

                <div class="tab">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    <label for="nome">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                </div>

                <div class="tab">
                    <label for="email_registo">EMAIL</label>
                    <input type="email" id="email_registo" name="email" placeholder="nome@exemplo.com" required>
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required>
                </div>

                <div class="tab">
                    <label for="password_registo">PASSWORD</label>
                    <div class="pass-container">
                        <input type="password" name="password_registo" id="password_registo"
                            placeholder="Password" required>
                        <i class="fas fa-eye" id="eye_registo" onclick="showPassRegisto()"></i>
                    </div>
                    <label for="password_confirm">REPETIR PASSWORD</label>
                    <div class="pass-container">
                        <input type="password" name="password_confirm" id="password_confirm"
                            placeholder="Confirmar password" required>
                        <i class="fas fa-eye" id="eye_confirm" onclick="showPassConfirm()"></i>
                    </div>

                </div>


                <div class="botoes">
                    <button type="button" id="prevBtn" class="btn-registo"
                        onclick="nextPrev(-1)">VOLTAR</button>
                    <button type="button" id="nextBtn" class="btn-registo"
                        onclick="nextPrev(1)">SEGUINTE</button>

                </div>
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
        </div>

    </div>

    <div class="metade">

        <h1>TABELA DE PREÇOS</h1>

        <div class="tabela-preco">
    <table>
            <tbody>
            <tr class="header">
            <th>Pacote</th>
            <th>Idade</th>
            <th>Mensalidade</th>
            </tr>
            <tr>
            <td>teste</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>teste</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            </tbody>
            </table>

        </div>
    </div>
</div>

<div class="inscricao"></div>
<script src="js/script.js"></script>


@endsection