$(document).ready(function () {
    $("#option2").addClass("selected");
    $image = $("#image2").text();
    $image = "https://"+window.location.hostname+"/images/noticias/" + $image;
    $("#image").attr("src", $image);

    $href = $("#href_link2").text();
    $href = +"/noticia/" + $href;
    $("#button_href").attr("href", $href);

    $date = $("#date2").text();
    $("#news_date").text($date);

    $text = $("#text2").text();
    $("#news_title").text($text);

    $("#option1").click(function () {
        $("#option1").addClass("selected");
        $("#option2").removeClass("selected");
        $("#option3").removeClass("selected");

        $image = $("#image1").text();
        $image = "https://"+window.location.hostname+"/images/noticias/" + $image;
        $("#image").attr("src", $image);

        $href = $("#href_link1").text();
        $href = +"/noticia/" + $href;
        $("#button_href").attr("href", $href);

        $date = $("#date1").text();
        $("#news_date").text($date);

        $text = $("#text1").text();
        $("#news_title").text($text);
    });

    $("#option2").click(function () {
        $("#option1").removeClass("selected");
        $("#option2").addClass("selected");
        $("#option3").removeClass("selected");

        $image = $("#image2").text();
        $image = "https://"+window.location.hostname+"/images/noticias/" + $image;
        $("#image").attr("src", $image);

        $href = $("#href_link2").text();
        $href = +"/noticia/" + $href;
        $("#button_href").attr("href", $href);

        $date = $("#date2").text();
        $("#news_date").text($date);

        $text = $("#text2").text();
        $("#news_title").text($text);
    });

    $("#option3").click(function () {
        $("#option1").removeClass("selected");
        $("#option2").removeClass("selected");
        $("#option3").addClass("selected");

        $image = $("#image3").text();
        $image = "https://"+window.location.hostname+"/images/noticias/" + $image;
        $("#image").attr("src", $image);

        $href = $("#href_link3").text();
        $href = +"/noticia/" + $href;
        $("#button_href").attr("href", $href);

        $date = $("#date3").text();
        $("#news_date").text($date);

        $text = $("#text3").text();
        $("#news_title").text($text);
    });
});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$("#jogos").click(function(){

    $x = $("#jogos_menu").css("display");

    if ($x == "none"){
        $(this).children("i").attr('class', 'bx bxs-up-arrow');
        $("#jogos_menu").css("display", "block");

    }else{
        $(this).children("i").attr('class', 'bx bxs-down-arrow');
        $("#jogos_menu").css("display", "none");

    }

});

$("#suporte").click(function(){

    $x = $("#suporte_menu").css("display");

    if ($x == "none"){

        $(this).children("i").attr('class', 'bx bxs-up-arrow');
        $("#suporte_menu").css("display", "block");

    }else{

        $(this).children("i").attr('class', 'bx bxs-down-arrow');
        $("#suporte_menu").css("display", "none");

    }

});
