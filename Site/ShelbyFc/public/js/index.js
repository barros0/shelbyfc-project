$(document).ready(function () {
    $("#option2").addClass("selected");
    $image = $("#image2").text();
    $image = "http://shelbyfc.test/images/noticias/" + $image;
    $("#image").attr("src", $image);

    $href = $("#href_link2").text();
    $href = "http://shelbyfc.test/noticia/" + $href;
    $("#button_href").attr("href", $href)

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

        $href = $("#href_link1").text();
        $href = "http://shelbyfc.test/noticia/" + $href;
        $("#button_href").attr("href", $href)

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

        $href = $("#href_link2").text();
        $href = "http://shelbyfc.test/noticia/" + $href;
        $("#button_href").attr("href", $href)

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

        $href = $("#href_link3").text();
        $href = "http://shelbyfc.test/noticia/" + $href;
        $("#button_href").attr("href", $href)

        $date = $("#date3").text();
        $("#news_date").text($date);

        $text = $("#text3").text();
        $("#news_title").text($text);
    });
});

$(document).ready(function () {
    
});