@include('partials.head')


<header>
    <div class="navbar-esq">
        <div class="logo">
            <a class="link-logo" href="{{route('index')}}">
                <img src="{{asset('images/logo.svg')}}" alt="Logo">
            </a>
        </div>
    </div>

    <div class="navbar-dir">

        <a href="{{route('login')}}" id="conta">INICIAR SESSÃO</a>

    </div>
</header>


<div id="seccao-registo" class="d-flex justify-content-center align-items-center fullvh"
     style="">

    <section id="registo" class="col-12">

        <div class="row text-center col-12 title-login">
            <h3 class="tit">Torne-se Membro!</h3>
        </div>

        <div class="login-wrapper">
            <div class="login-regular">
                <form id="register" method="post" action="{{route('register')}}">
                    @csrf
                    <div class="tab">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" id="nome" placeholder="Nome" required>
                        <label for="nome">Sobrenome</label>
                        <input type="text" name="subname" id="sobrenome" placeholder="Sobrenome" required>
                    </div>

                    <div class="tab">
                        <label for="email_registo">EMAIL</label>
                        <input type="email" id="email_registo" name="email" placeholder="nome@exemplo.com" required>
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="phone" id="telefone" placeholder="Telefone">
                    </div>

                    <div class="tab">
                        <label for="password_registo">PASSWORD</label>
                        <div class="pass-container">
                            <input type="password" name="password" id="password_registo"
                                   placeholder="Password" required>
                            <i class="fas fa-eye" id="eye_registo" onclick="showPassRegisto()"></i>
                        </div>
                        <label for="password_confirm">REPETIR PASSWORD</label>
                        <div class="pass-container">
                            <input type="password" name="password_confirmation" id="password_confirm"
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
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <p><strong>Opps Something went wrong</strong></p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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

                <a href="{{ route('social.redirect','google') }}" class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/google.svg')}}" alt="Google"></div>
                    <div class="nome-social">Continuar com o Google</div>
                </a>

                <a href="{{ route('social.redirect','facebook') }}" class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/apple.svg')}}" alt="Apple"></div>
                    <div class="nome-social">Continuar com a Apple</div>
                </a>

                <a href="{{ route('social.redirect','facebook') }}"  class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/facebook.svg')}}" alt="Facebook"></div>
                    <div class="nome-social">Continuar com o Facebook</div>
                </a>
            </div>

        </div>

        <div class="row footer-bg col-12 title-login"></div>

    </section>

</div>
<div class="background">
    <div class="dir"></div>
    <div class="left"></div>
</div>


<script src="{{asset('js/functions.js')}}"></script>
