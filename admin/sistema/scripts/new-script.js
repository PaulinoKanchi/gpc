$(window).on('load', function() {
  $("#nav-home").click();
});

$("#nav-home").click(function(){
  UpdateContent("#nav-home","home.php");
});

$("#nav-paises").click(function(){
  UpdateContent("#nav-paises","paises.php");
});

$("#nav-proveedores").click(function(){
  UpdateContent("#nav-proveedores","proveedores.php");
});
$("#nav-procesos-med").click(function(){
  UpdateContent("#nav-procesos-med","procesosmedicamentos.php");
});
$("#nav-mostrar-usuarios").click(function(){
  UpdateContent("#nav-mostrar-usuarios","mostrar-usuarios.php");
});

$("#nav-medicamentos").click(function(){
  UpdateContent("#nav-medicamentos","medicamentos.php");
});

$("#nav-material-cur").click(function(){
  UpdateContent("#nav-material-cur","material-cur.php");
});

$("#nav-nuevo-prov").click(function(){
  UpdateContent("#nav-nuevo-prov","nuevo-prov.php");
});


$("#nav-nuevo-usuario").click(function(){
  UpdateContent("#nav-nuevo-usuario","nuevo-usuario.php");
});

$("#nav-eva-tec-med").click(function(){
  UpdateContent("#nav-eva-tec-med","eva-tec-med.php");
});

$("#nav-eva-eco-med").click(function(){
  UpdateContent("#nav-eva-eco-med","eva-eco-med.php");
});

$("#nav-eva-leg-med").click(function(){
  UpdateContent("#nav-eva-leg-med","eva-leg-med.php");
});

$("#nav-eva-tec-mat").click(function(){
  UpdateContent("#nav-eva-tec-mat","eva-tec-mat.php");
});

$("#nav-eva-eco-mat").click(function(){
  UpdateContent("#nav-eva-eco-mat","eva-eco-mat.php");
});

$("#nav-eva-leg-mat").click(function(){
  UpdateContent("#nav-eva-leg-mat","eva-leg-mat.php");
});


$("#nav-eventos").click(function(){
  UpdateContent("#nav-eventos","eventos.php");
});

$("#nav-even-tec-mat").click(function(){
  UpdateContent("#nav-even-tec-mat","even-tec-mat.php");
});

$("#nav-even-eco-med").click(function(){
  UpdateContent("#nav-even-eco-med","even-eco-med.php");
});


$("#nav-even-eco-mat").click(function(){
  UpdateContent("#nav-even-eco-mat","even-eco-mat.php");
});

$("#nav-even-leg-med").click(function(){
  UpdateContent("#nav-even-leg-med","even-leg-med.php");
});

$("#nav-even-leg-mat").click(function(){
  UpdateContent("#nav-even-leg-mat","even-leg-mat.php");
});

$("#nav-bus-proveedores").click(function(){
  UpdateContent("#nav-bus-proveedores","report-provedores.php");
});



function UpdateContent(navId,navLink){
  newObject = '<object data="' + navLink + '" class="obj-container">'
  $("#main-container").html(newObject);
  $(".nav-link").removeClass("active");
  $(navId).addClass("active");
}
