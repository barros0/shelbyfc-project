//menu hamburguer
function myFunction(x) {
    x.classList.toggle("change");
  }

//header mudar cor
$(function() {
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 50) {
          $(".navbar").addClass("active");
      } else {
          //remove the background property so it comes transparent again (defined in your css)
         $(".navbar").removeClass("active");
      }
  });
});

//contador
var countDownDate = new Date("Dec 31, 2022 15:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();
    
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("contador").innerHTML = days + " Dias " + hours + " Horas "
  + minutes + " Minutos " + seconds + " Segundos ";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("contador").innerHTML = "EXPIRADO";
  }
}, 1000);
