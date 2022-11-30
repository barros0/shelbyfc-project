@include('partials.head')


<header>
    <div class="navbar-esq">
        <div class="logo">
            <a class="link-logo" href="index.html">
                <img src="{{asset('images/logo.svg')}}" alt="Logo">
            </a>
        </div>
    </div>

    <div class="navbar-dir">

        <span id="conta" onclick="Mudar()">CRIAR CONTA</span>

    </div>
</header>

<div id="seccao-login" class="d-flex justify-content-center align-items-center fullvh">
    <section id="login" class="col-12">
        <div class="row text-center col-12 title-login">
            <h3 class="tit">Bem-Vindo de Volta!</h3>
        </div>
        <div class="login-wrapper">
            <div class="login-regular">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <label for="email">EMAIL</label>
                    <input value="{{ old('email') }}" class="@error('email') is-invalid @enderror" type="email"
                           id="email" name="email" placeholder="nome@exemplo.com" required autocomplete="email"
                           autofocus
                           onkeyup="enableSubmit()">

                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label for="password">PASSWORD </label>

                    <div class="pass-container">
                        <input @error('password') is-invalid @enderror type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password"
                               class="required" onkeyup="enableSubmit()">
                        <i class="fas fa-eye" id="eye" onclick="showPass()"></i>
                        <a href="#" class="frgt">Esqueceu-se da Password?</a>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <input type="submit" id="login-btn" class="btn-login" value="INICIAR SESSÃO"
                           disabled="disabled">
                </form>
            </div>
            <div class="vl">
                <span class="vl-innertext">OU</span>
            </div>
            <div class="login-socials">

                <div class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/google.svg')}}" alt="Google"></div>
                    <div class="nome-social">Continuar com o Google</div>
                </div>

                <div class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/apple.svg')}}" alt="Apple"></div>
                    <div class="nome-social">Continuar com a Apple</div>
                </div>

                <div class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/facebook.svg')}}" alt="Facebook"></div>
                    <div class="nome-social">Continuar com o Facebook</div>
                </div>
            </div>

        </div>
        <div class="row text-center col-12 title-login">
            <a href="#" class="trouble">NÃO CONSEGUE INICIAR SESSÃO?</a>
            <div class="linha-ajuda"></div>
        </div>
        <div class="row footer-bg col-12 title-login"></div>

    </section>
</div>

<div id="seccao-registo" class="d-flex justify-content-center align-items-center fullvh"
     style="display: none !important;">

    <section id="registo" class="col-12">

        <div class="row text-center col-12 title-login">
            <h3 class="tit">Torne-se Membro!</h3>
        </div>

        <div class="login-wrapper">
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
                                onclick="nextPrev(-1)">VOLTAR
                        </button>
                        <button type="button" id="nextBtn" class="btn-registo"
                                onclick="nextPrev(1)">SEGUINTE
                        </button>

                    </div>
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>
            </div>
            <div class="vl">
                <span class="vl-innertext">OU</span>
            </div>
            <div class="login-socials">

                <div class="social">
                    <div class="logo-social"><img src="img/google.svg" alt="Google"></div>
                    <div class="nome-social">Continuar com o Google</div>
                </div>

                <div class="social">
                    <div class="logo-social"><img src="img/apple.svg" alt="Apple"></div>
                    <div class="nome-social">Continuar com a Apple</div>
                </div>

                <div class="social">
                    <div class="logo-social"><img src="img/facebook.svg" alt="Facebook"></div>
                    <div class="nome-social">Continuar com o Facebook</div>
                </div>
            </div>

        </div>

        <div class="row footer-bg col-12 title-login"></div>

    </section>

</div>
<div class="background">
    <div class="dir"></div>
    <div class="left"></div>
</div>


<script>


</script>
