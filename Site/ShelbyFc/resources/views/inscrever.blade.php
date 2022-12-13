@include('partials.head')

@extends("layouts.master")

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
        
        <h1 class="titulo-sec-3">INSCRIÇÃO PARA SÓCIO</h1>

        <div class="login-regular">
            <form class="form-login" id="inscrever-socio" action="{{route('inscrever.post')}}">

                <div class="tab">
                    <label for="nif">NIF</label>
                    <input type="number" name="nif" placeholder="NIF" required value="{{ Auth::user()->nif }}">
                    <label for="birthdate">Data de Nascimento</label>
                    <input type="date" name="birthdate" placeholder="Data de Nascimento" required value="{{ Auth::user()->birthdate }}">
                </div>

                <div class="tab">
                <label for="cc">Cartão de Cidadão (Ou documento equivalente)</label>
                    <input type="file" name="cc" placeholder="cc" required>
                    
                </div>

                <div class="tab">
                    <label for="morada">Morada</label>
                    <input type="text" name="morada" placeholder="Morada" required value="{{ Auth::user()->address }}">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" placeholder="Cidade" required value="{{ Auth::user()->city }}">
                    <label for="zipcode">Código Postal</label>
                    <input type="text" name="zipcode" placeholder="Código Postal" required value="{{ Auth::user()->postal_code }}">
                    <label for="pais">País</label>
                    <select class="" name="pais" id="pais">
                    <option value="">Selecione o seu país</option>
                    @foreach($nacionalidades as $country)
                        <option
                            @if($country->id == Auth::user()->country_id)
                            selected
                            @endif
                            value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
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

        <h1 class="titulo-sec-3">TABELA DE PREÇOS</h1>

        <div class="tabela-preco">
    <table>
            <tbody>
            <tr class="header">
            <th>Pacote</th>
            <th>Idade</th>
            <th>Mensalidade</th>
            </tr>
            @foreach ($socio_price as $sociopacote) <!--para cada registo de pacote-->
            <tr>
            <td>{{ $sociopacote->name }}</td>
            <td>{{ $sociopacote->idade }}</td>
            <td>{{ $sociopacote->preco }}</td>
            </tr>
            @endforeach
            </tbody>
            </table>

        </div>
    </div>
</div>

<div class="inscricao"></div>
<script src="{{ asset('js/functions.js') }}"></script>

@endsection