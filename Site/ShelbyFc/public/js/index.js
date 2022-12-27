$(document).ready(function () {
    $("#option2").addClass("selected");
    $image = $("#image2").text();
    $image = "http://shelbyfc.test/images/noticias/" + $image;
    $("#image").attr("src", $image);

    $date = $("#date2").text();
    $("#news_date").text($date);
    
    $text = $("#text2").text();
    $("#news_title").text($text);

    $("#option1").click(function () {
        $("#option1").addClass("selected");
        $("#option2").removeClass("selected");
        $("#option3").removeClass("selected");

        $image = $("#image1").text();
        $image = "http://shelbyfc.test/images/noticias/" + $image;
        $("#image").attr("src", $image);

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
        $image = "http://shelbyfc.test/images/noticias/" + $image;
        $("#image").attr("src", $image);

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
        $image = "http://shelbyfc.test/images/noticias/" + $image;
        $("#image").attr("src", $image);

        $date = $("#date3").text();
        $("#news_date").text($date);

        $text = $("#text3").text();
        $("#news_title").text($text);
    });
});
