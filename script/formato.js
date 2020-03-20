$(document).ready(function() {
  var clonadoPersonal = false;
  var clonadoSolicitud = false;

  // Preguntas Opcionales
  $("input[name='P1']").click(function() {
    if ($("#P1-1").is(':checked')){
      $("#P1-E").slideUp('fast');
    } else {
      $("#P1-E").slideDown('fast');
    }
  });
  $("input[name='P3']").click(function() {
    PreguntaOpcional("P3-1","P3-O");
  });
  $("input[name='P4']").click(function() {
    PreguntaOpcional("P4-2","P4-O");
  });
  $("input[name='P8']").click(function() {
    PreguntaOpcional("P8-2","P8-O");
  });
  $("input[name='P10']").click(function() {
    PreguntaOpcional("P10-2","P10-O");
  });
  $("input[name='P16']").click(function() {
    PreguntaOpcional("P16-2","P16-O");
  });
  $("input[name='P17']").click(function() {
    PreguntaOpcional("P17-2","P17-O");
  });
  $("input[name='P19']").click(function() {
    if ($("#P19-2").is(':checked')){
      $("#P19-E").slideUp('fast');
    } else {
      $("#P19-E").slideDown('fast');
    }
  });
  $("input[name='P20']").click(function() {
    PreguntaOpcional("P20-3","P20-O");
  });
  $("input[name='P24']").click(function() {
    if ($("#P24-2").is(':checked')){
      $("#P24-E").slideUp('fast');
    } else {
      $("#P24-E").slideDown('fast');
    }
  });

  $("#enviar").click(function() {

    $("input").each(function() {
      if($(this).is(':hidden')){

        var tipo = this.type || this.tagName.toLowerCase();

        if(tipo == "radio"){
          $(this).prop('checked', false);
        } else {
          $(this).val('');
        }

      }
    });
  });

  // Scroll
  $(window).scroll(function(){
    var scrollTop = $(window).scrollTop();
    var scrollBottom = scrollTop + $(window).height();

    // Información Personal
    if ($("header").offset().top + $("header").height() >= $("#adopt-info").offset().top + $("#adopt-info").height()){
      if(clonadoPersonal == false){
        var button = $('#info-perso').clone();
        $(button).addClass('info-perso-clone');
        $(button).appendTo('#formulario');
        clonadoPersonal = true;
      }

      FixedTitle(".info-perso-clone","#info-perso");

    } else {
      StaticTitle(".info-perso-clone","#info-perso");
    }


    //Solicitud de Adopción
    if ($(".info-perso-clone").offset().top + $(".info-perso-clone").outerHeight() >= $("#solicitud-adopcion").offset().top + $("#solicitud-adopcion").height()){

      if(clonadoSolicitud == false){
        var button = $('#solicitud-adopcion').clone();
        $(button).addClass('solicitud-adopcion-clone');
        $(button).appendTo('#formulario');
        clonadoSolicitud = true;
      }

      FixedTitle(".solicitud-adopcion-clone","#solicitud-adopcion");

    } else {
      StaticTitle(".solicitud-adopcion-clone","#solicitud-adopcion");
    }
  });

  function FixedTitle(clon,original){
    //var marginTop = $("#adopt-info").offset().top + $("#adopt-info").height() - scrollTop;
    $(clon).css({"position":"fixed","top":"0","padding-top":"130px","visibility":""});
    $(original).css("visibility","hidden");
  }
  function StaticTitle(clon,original){
    //button.css({"position":"","top":"","margin-top":""});
    $(original).css("visibility","visible");
    $(clon).css("visibility","hidden");
  }
  function PreguntaOpcional(name1,name2){
    if ($("#" + name1).is(':checked')){
      $("input[name='" + name2 + "']").slideUp('fast');
    } else {
      $("input[name='" + name2 + "']").slideDown('fast');
    }
  }
});
