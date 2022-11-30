$(document).ready(function () {
  let id;
  const modalText = {
    noticia1: {
      title: "UNDER 19 | ROME-SHELBYFC, THE GAME",
      date: "15 Jun 2022",
      src: "img/b2cxufmum6iedfzgcwfz.webp",
    },
    noticia2: {
      title: "PRESS ROOM POST SHELBY FC vs LAZIO INTERVIEWS",
      date: "20 Mar 2022",
      src: "img/gqwtqj3dtpbpe6oerjcw.jpg",
    },
    noticia3: {
      title: "WOMEN, WE START FROM TARDINI! PARMA HEAD",
      date: "30 Agos 2022",
      src: "img/uke4oolq5rdfgjlqvty9.webp",
    },
  };

  $("#noticia1").click(function () {
    id = "noticia1";
    $("#noticia1").addClass("selected");
    $("#noticia2").removeClass("selected");
    $("#noticia3").removeClass("selected");
    fillModal(id);
  });

  $("#noticia2").click(function () {
    id = "noticia2";
    $("#noticia1").removeClass("selected");
    $("#noticia2").addClass("selected");
    $("#noticia3").removeClass("selected");
    fillModal(id);
  });

  $("#noticia3").click(function () {
    id = "noticia3";
    $("#noticia1").removeClass("selected");
    $("#noticia2").removeClass("selected");
    $("#noticia3").addClass("selected");
    fillModal(id);
  });

  function fillModal(click) {
    $("#news_title").text(modalText[click].title);
    $("#news_date").text(modalText[click].date);
    $(".container_main_new").css(
      "background-image",
      "linear-gradient(0deg, rgba(0, 0, 0, 0.8687850140056023) 0%, rgba(0, 0, 0, 0) 100%), url(" +
        modalText[click].src +
        ")"
    );
  }

  $("#categoria1").click(function () {
    $("#categoria1").addClass("selected_category");
    $("#categoria2").removeClass("selected_category");
    $("#categoria3").removeClass("selected_category");
    $("#categoria4").removeClass("selected_category");
  });

  $("#categoria2").click(function () {
    $("#categoria1").removeClass("selected_category");
    $("#categoria2").addClass("selected_category");
    $("#categoria3").removeClass("selected_category");
    $("#categoria4").removeClass("selected_category");
  });

  $("#categoria3").click(function () {
    $("#categoria1").removeClass("selected_category");
    $("#categoria2").removeClass("selected_category");
    $("#categoria3").addClass("selected_category");
    $("#categoria4").removeClass("selected_category");
  });
  $("#categoria4").click(function () {
    $("#categoria1").removeClass("selected_category");
    $("#categoria2").removeClass("selected_category");
    $("#categoria3").removeClass("selected_category");
    $("#categoria4").addClass("selected_category");
  });
});
