@extends('layouts.master')

@include('partials.head')

@section('title', 'Bilheteira  - Shelby FC')

@section('content')

<div class="container my-4">

    <div class="row">

        <div class="sidebar-apostas col-lg-4">

            <div class="row text-center">
                <h2 class="text-center">Próximos jogos</h2>
                <p>(Selecione um jogo para visualizar detalhes)</p>
            </div>

            <div class="gametable_bet">
                @foreach($proximos_jogos as $game)
                    <div class="game-bet-option" itemid="{{$game->id}}">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="team-img">
                                <img src="{{asset('images/logo.svg')}}" alt="">
                                <p class="text center">Shelby FC</p>
                            </div>

                            <div
                                class="info-game d-flex justify-content-center flex-column align-content-between g-0 m-0 p-0">
                                <p class="text-center fw-bolder">Amigável</p>
                                <h4 class="vs text-center">VS</h4>
                                <p class="text-center">{{$game->datetime_game}}</p>
                            </div>

                            <div class="team-img">
                                <img src="{{asset('images/liga/'.$game->opponent->image)}}" alt="{{$game->opponent->name}}">
                            <p class="text center">{{$game->opponent->name}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="row text-center mx-0 g-0 py-0 px-3 col-lg-8">
            <!-- <h2 class="mb-3">Selecione um jogo...</h2> -->
        <div id="details_screen" style="display: none"> 
            <div class="match-day">
                <div class="match-details">
                    <span id="date_game" class="match-date"></span>
                    <span id="hours_game" class="match-hours"></span>
                    <span id="location" class="match-location"></span>
                </div>
                <div class="teams">
                    <div class="match-home-team">
                        <img src="{{ asset('images/liga/shelby_fc.png') }}" alt="Shelby FC" class="match-team-bilheteira">
                        <span class="match-type">Shelby F.C</span>
                    </div>
                    <div class="match-vs-half"><span class="match-type">Amigável</span>
                        <h3 class="match-day-vs">VS</h3></div>
                    <div class="match-away-team">
                        <img id="team2_img" src="" alt="oponente" class="match-team-bilheteira">
                        <span id="team2" class="match-type"></span>
                    </div>
                </div>
            
            </div>


                <form action="{{route('tobet.post')}}" method="post" >
                    @csrf
                <div class="container_details_tickets">

                    <div class="details-half">

                    <input name="jogo" id="game_id" type="number" hidden>
                    <div class="game-selected px-3 d-flex flex-column flex-wrap justify-content-evenly">
    
    
                    <div class="row g-0 m-0 p-0">
    
                        <div class="montante-bilhetes">
                                <span class="details-montante text-end"> <span class="cinza-montante">Máx:</span> 5 Bilhetes / Jogo</span></span>
                            <input name="montante" id="montante" type="number" placeholder="Quantidade" min="1" max="5">
                            <div class="montantes-rapidos">
                                <button type="button" class="bt_add_value btn-secondary" value="1">1</button>
                                <button type="button" class="bt_add_value btn-secondary" value="3">3</button>
                                <button type="button" class="bt_add_value btn-secondary" value="5">5</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="separador"></div>
                    <div class="details-half">
                        
                        <input name="jogo" id="game_id" type="number" hidden>
                        <div class="game-selected px-3 d-flex flex-column flex-wrap justify-content-evenly">
        
        
                        <div class="row g-0 m-0 p-0">
        
                            <div class="montante-bilhetes">
                                    <span class="details-montante text-end"> <span class="cinza-montante">Máx:</span> 5 Bilhetes / Jogo</span></span>
                                <input name="montante" id="montante" type="number" placeholder="Montante" min="1" max="5">
                                <div class="montantes-rapidos">
                                    <button type="button" class="bt_add_value btn-secondary" value="1">1</button>
                                    <button type="button" class="bt_add_value btn-secondary" value="3">3</button>
                                    <button type="button" class="bt_add_value btn-secondary" value="5">5</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="pay-tickets">

    
                    <div class="row g-0 mb-3 p-0">
                        <h3>TOTAL <span class="ganhos-bg"><span id="ganhos_possiveis" class="ganhos">0€</span></span></h3>
                    </div>
    
    
                    <div class="row g-0 m-0 p-0 ">
                        <button type="submit" class="text-uppercase btn-registo">Prosseguir Para Pagamento</button>
                    </div>
            </div>

            </form>
    
        

    </div>


</div>

</div>
</div>

<script>
    /*temporario*/
    $(document).ready(function () {

        // cada vez que se muda o fator faz update e mete active o bt/div
        $('.bet-to-select').on('click', function () {
            $('.bet-to-select').removeClass('bet_active');
            $(this).addClass('bet_active');
            setTimeout(
                function()
                {
                    update_values();
                }, 100);

        });

        // ao clicar em cada jogo faz select e faz o get das infos
        $('.game-bet-option').on('click', function () {
            $('.game-bet-option').removeClass('bet_active');
            $(this).addClass('bet_active');

            gameid = $(this).attr('itemid');
            url = './api/get_game'


            $.ajax({
                url: url,
                dataType: "json",
                type: "Post",
                async: true,
                data: {
                    game_id: gameid,
                },
                success: function (data) {
                    let datetime = data.date_game.split(" ");
                    let date = new Date(datetime[0]);
                    let hours = datetime[1].split(":").slice(0, 2).join(":");
                    date = date.toLocaleDateString("default", { day: "numeric", month: "short", year: "numeric" });
                    date = date.split("/").join("-");

                    $('#details_screen').show()
                    $('#date_game').text(date)
                    $('#hours_game').text(hours)
                    $('#game_id').val(data.game_id)
                    $('#team1_img').attr('src', data.team1_img)
                    $('#team1').text(data.team1)
                    $('#team2_img').attr('src', data.team2_img)
                    $('#team2').text(data.team2)
                    $('#limite').text(data.limit_buy)
                    $('#quantidade').text(data.quantidade)
                    $('#preco_normal').text(data.preco)
                    $('#preco_socio').text(data.preco_socio)
                    $('#location').text(data.location)

                    // scroll para o screen de apostas
                    $('html, body').animate({
                        scrollTop: $("#details_screen").offset().top
                    });
                },
                error: function (xhr, exception) {
                    var msg = "";
                    if (xhr.status === 0) {
                        msg = "Not connect.\n Verify Network." + xhr.responseText;
                    } else if (xhr.status == 404) {
                        msg = "Requested page not found. [404]" + xhr.responseText;
                    } else if (xhr.status == 500) {
                        msg = "Internal Server Error [500]." + xhr.responseText;
                    } else if (exception === "parsererror") {
                        msg = "Requested JSON parse failed.";
                    } else if (exception === "timeout") {
                        msg = "Time out error." + xhr.responseText;
                    } else if (exception === "abort") {
                        msg = "Ajax request aborted.";
                    } else {
                        msg = "Error:" + xhr.status + " " + xhr.responseText;
                    }

                }
            });
            update_values();
        });

        function update_values(){
            $('#montante').val();
            fator = $('input[name="fator"]:checked').val()
            val_fator = $('#'+fator+'-odd').text()

            ganhos_possiveis =  $('#montante').val() * val_fator+'€';

            $('#ganhos_possiveis').text(ganhos_possiveis);
        }
        // quando valor muda muda ganhos posssiveis
        $('#montante').on('keyup', function() {
            update_values();
        });



        $('.bt_add_value').click(function () {
            $('#montante').val($(this).val())
            update_values();
        });
    });


</script>

@endsection