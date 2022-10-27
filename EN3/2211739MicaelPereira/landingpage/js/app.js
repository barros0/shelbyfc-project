$(document).ready(function() {





    countDownDate = new Date("2995-12-17T03:24:00");
    var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, "0");;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, "0");
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, "0");
        var seconds = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, "0");

        if (distance < 0) {
            /// quando promoção acaba
            $(location).attr('href', './data-expirada');

        } else {
            $('#secounds1').text(seconds.charAt(0))
            $('#secounds2').text(seconds.charAt(1))

            $('#minutes1').text(minutes.charAt(0))
            $('#minutes2').text(minutes.charAt(1))

            $('#hours1').text(hours.charAt(0))
            $('#hours2').text(hours.charAt(1))

            $('#days').text(days.charAt(1))
        }



    }, 1000);






    // dots de slide
    $(window).scroll(function(event) {
        if ($("#home").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $("#home-s").addClass('active');
            $("#subscrever-s").removeClass('active');
            $("#mais-s").removeClass('active');
            $("#testemunhos-s").removeClass('active');
            $("#vantagens-s").removeClass('active');
        }
        if ($("#vantagens").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $("#vantagens-s").addClass('active');
            $("#subscrever-s").removeClass('active');
            $("#mais-s").removeClass('active');
            $("#testemunhos-s").removeClass('active');
            $("#home-s").removeClass('active');
        }
        if ($("#mais").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $("#mais-s").addClass('active');
            $("#home-s").removeClass('active');
            $("#subscrever").removeClass('active');
            $("#testemunhos-s").removeClass('active');
            $("#vantagens-s").removeClass('active');
        }
        if ($("#testemunhos").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $("#testemunhos-s").addClass('active');
            $("#home-s").removeClass('active');
            $("#subscrever-s").removeClass('active');
            $("#mais-s").removeClass('active');
            $("#vantagens-s").removeClass('active');
        }
        if ($("#subscrever").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $("#subscrever-s").addClass('active');
            $("#home-s").removeClass('active');
            $("#mais-s").removeClass('active');
            $("#testemunhos-s").removeClass('active');
            $("#vantagens-s").removeClass('active');
        }
    });




    /* faz slide de testemunhos */
    var swiper = new Swiper(".testemunhos-slider", {
        loop: true,
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,

        keyboard: {
            enabled: true,
        },
        breakpoints: {
            769: {
                slidesPerView: 3,
                slidesPerGroup: 1,
            },
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

})