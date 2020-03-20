var scrollpercent = 0;

$(document).ready(function() {
  var cabecera = "estatica";

  // Start-Screen Parallax
  var image = document.getElementsByClassName('thumbnail');
  new simpleParallax(image);

  // Tarjetas de Adopción
  $(".petcard").hover(function(){
    $(this).find(".petcard-photo>img").animate({
      height: "230px"
    },300);
  });
  $(".petcard").mouseleave(function(){
    $(this).find(".petcard-photo>img").animate({
      height: "200px"
    },300);
  });

  // Scroll
  $(window).scroll(function(){
    var scrollTop = $(window).scrollTop();
    var scrollBottom = scrollTop + $(window).height();

    // Cabecera
    if (scrollTop >= $(".about-us-screen").offset().top){ // Cabecera Fija
      if (cabecera == "estatica"){
        cabecera = "fija";
        CabeceraFija();
      }
    } else { // Cabecera estática
      if (cabecera == "fija"){
        cabecera = "estatica";
        $("header").slideUp(300);
        setTimeout(function() {
          CabeceraEstatica();
        },350);
      }
    }

    // Lo que hacemos
    scrollpercent = -((document.documentElement.scrollTop + document.body.scrollTop) / (600 - document.documentElement.clientHeight)) - 2;

    // 1)
    if (scrollpercent < 2){
      if (scrollTop >= $(".start-screen").height() / 1.3){
          appearStep("#no1>path, #Capa_1_1_>text, #perro1");
          if (scrollpercent > 1){
          lineDrawing("line1",scrollTop,"1","2");
          appearStep("#line1");
        }
      } else {
        disappearStep("#no1>path, #Capa_1_1_>text, #line1, #perro1");
      }
    }

    // 2)
    if (scrollpercent >= 2){
        if (scrollpercent < 3){
          appearStep("#no2>path, #Capa_2_1_>text, #line2, .perro2");
          lineDrawing("line2",scrollTop,"2","3");
        }
    } else {
      disappearStep("#no2>path, #Capa_2_1_>text, #line2, .perro2");
    }

    // 3)
    if (scrollpercent >= 3){
      if (scrollpercent < 4){
        appearStep("#no3>path, #Capa_3>text, #line3, .perro3");
        lineDrawing("line3",scrollTop,"3","4");
      }
    } else {
      disappearStep("#no3>path, #Capa_3>text, #line3, .perro3");
    }

    // 4)
    if (scrollpercent >= 4){
      if (scrollpercent < 5){
        appearStep("#no4>path, #Capa_4>text, .perro4");
      }
    } else {
      disappearStep("#no4>path, #Capa_4>text, .perro4");
    }

  });
});

function appearStep(ids){
  if ($(ids).css("opacity") == 0) {
    $(ids).animate({
      opacity: 1
    },1000);
  }
}
function disappearStep(ids){
  if ($(ids).css("opacity") == 1) {
    $(ids).animate({
      opacity: 0
    },500);
  }
}

function lineDrawing(line,scrollTop,first,last){
  // Variables de "Dibujo de Línea"
  var svg = document.getElementById(line);
  var length = svg.getTotalLength();
  // start position of the drawing - normal display pre-animation
  svg.style.strokeDasharray = length;
  // hides the svg before the scrolling starts
  svg.style.strokeDashoffset = length;

  // Dibujo de Línea
  const draw = length * (scrollpercent);
  if (scrollpercent > first && scrollpercent < last){
    drawing = length - draw;
  }
  svg.style.strokeDashoffset = drawing;
}

function CabeceraEstatica(){
  $("header").removeClass("position-fixed background-filter-sm");
  $("header>ul").removeClass("mt-2");
  $("header").addClass("position-absolute");
  $("header>ul").addClass("mt-3");
  //$("header").css({"background-color":"","display":"block"});
  $("header").css("background-color","");
  $(".logoGP").css("display","none");
  $("header").css("display","block");
  $(".nav-item>a").css("color","white");
}
function CabeceraFija(){
  $("header").hide().removeClass("position-absolute mt-3");
  $("header>ul").removeClass("mt-3");
  $("header").addClass("position-fixed background-filter-sm");
  $("header>ul").addClass("mt-2");
  $(".nav-item>a").css("color","rgb(80, 80, 80)");
  $(".logoGP").css("display","block");
  $("header").slideDown(600);
}
