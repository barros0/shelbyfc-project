@extends('layouts.master')

@section('title', 'Apostar | ShelbyFC')


@section('content')

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
                url = './api/get_game_bet'


                $.ajax({
                    url: url,
                    dataType: "json",
                    type: "Post",
                    async: true,
                    data: {
                        game_id: gameid,
                    },
                    success: function (data) {
                        $('#bet_screen').show()
                        $('#date_game').text(data.date_game)
                        $('#game_id').val(data.game_id)
                        $('#win-odd').text(data.win)
                        $('#draw-odd').text(data.draw)
                        $('#lose-odd').text(data.lose)
                        $('#team1_img').attr('src', data.team1_img)
                        $('#team1').val(data.team1)
                        $('#team2_img').attr('src', data.team2_img)
                        $('#team2').val(data.team2)

                        // scroll para o screen de apostas
                        $('html, body').animate({
                            scrollTop: $("#bet_screen").offset().top
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

    <div class="container my-4">

        <div class="row">

            <div class="sidebar-apostas col-lg-4">

                <div class="row text-center">
                    <h2 class="text-center">Próximos jogos</h2>
                    <p>(Selecione um jogo para apostar)</p>
                </div>

                <div class="gametable_bet">
                    @foreach($next_games as $game)
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

            <div class="row text-center mx-0 g-0 p-0 col-lg-8">
                <!-- <h2 class="mb-3">Selecione um jogo...</h2> -->

                <form action="{{route('tobet.post')}}" method="post" id="bet_screen" style="display: none">
                    @csrf
                    <input name="jogo" id="game_id" type="number" hidden>
                    <div class="game-selected px-3 d-flex flex-column flex-wrap justify-content-evenly">

                        <div class="row g-0 m-0 p-0">
                            <div class="d-flex flex-row justify-content-evenly align-items-center">
                                <div class="team-img">
                                    <img id="team1_img" src="{{asset('images/logo.svg')}}" alt="">
                                </div>

                                <div
                                    class="info-game d-flex justify-content-center flex-column align-content-between g-0 m-0 p-0">
                                    <p class="text-center fw-bolder">Amigável</p>
                                    <h1 class="vs text-center">VS</h1>
                                    <p class="text-center" id="date_game">Selecione um jogo no menu de jogos</p>
                                </div>

                                <div class="team-img">
                                    <img id="team2_img" src="{{asset('images/logo.svg')}}" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="row g-0 m-0 p-0">
                            <h4 class="mb-3">Apostar</h4>
                            <div class="select-bet">
                                <input hidden type="radio" id="win" name="fator" value="win">
                                <input hidden type="radio" id="lose" name="fator" value="lose">
                                <input hidden type="radio" id="draw" name="fator" value="draw">

                                <label for="win" type="radio" class="bet-to-select d-flex flex-column win">
                                    <h3>W</h3>
                                    <span class="odd fw-bolder" id="win-odd">1.00</span>
                                </label>
                                <label for="draw" type="button" class="bet-to-select d-flex flex-column draw">
                                    <h3>D</h3>
                                    <span class="odd fw-bolder" id="draw-odd">1.00</span>
                                </label>
                                <label for="lose" type="button" class="bet-to-select d-flex flex-column lose">
                                    <h3>L</h3>
                                    <span class="odd fw-bolder" id="lose-odd">1.00</span>
                                </label>
                            </div>
                    </div>

                    <div class="row g-0 m-0 p-0">

                        <div class="montante">
                                <span class="details-montante text-end"> <span
                                        class="cinza-montante">Min:</span> 1€ <span class="cinza-montante">Máx:</span> 500€</span>
                            <input name="montante" id="montante" type="number" placeholder="Montante" min="1" max="500">
                            <div class="montantes-rapidos">
                                <button type="button" class="bt_add_value btn-secondary" value="1">1€</button>
                                <button type="button" class="bt_add_value btn-secondary" value="10">10€</button>
                                <button type="button" class="bt_add_value btn-secondary" value="25">25€</button>
                                <button type="button" class="bt_add_value btn-secondary" value="50">50€</button>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0 m-0 p-0">
                        <h3>Ganhos possíveis <span class="ganhos-bg"><span id="ganhos_possiveis" class="ganhos">0€</span></span></h3>
                    </div>


                    <div class="row g-0 m-0 p-0 ">
                        <button type="submit" class="btn btn-primary text-uppercase btn-aposta">Apostar</button>
                    </div>
            </div>
            </form>
        </div>


    </div>


    </div>


@endsection
