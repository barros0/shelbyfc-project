$(document).ready(function () {
    $("#filtros_news").click(function () {
        $display = $(this).siblings().css("display");
        console.log($display);
        if ($display === "none") {
            $(this).siblings().css("display", "block");
        } else {
            $(this).siblings().css("display", "none");
        }
    });
});
