<?php include_once('error.php');?>
<head>
  <meta charset="utf-8">
  <title>Autocompletado de Mutiples campos Usando jQuery , Ajax , PHP y MySQL</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
$(function() {
            $("#clave").autocomplete({
                source: "productos-material.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
                    $('#clave').val(ui.item.clave);
					$('#partida').val(ui.item.partida);
          $('#descripcion').val(ui.item.descripcion);
          $('#unidad').val(ui.item.unidad);
          $('#cantidad').val(ui.item.cantidad);
          $('#tipo').val(ui.item.tipo);
          $('#min').val(ui.item.min);
          $('#max').val(ui.item.max);
          $('#osopm').val(ui.item.osopm);
          $('#descripcion').val(ui.item.descripcion);

          
			     }
            });
		});
</script>
</head>
<body>
 
<div class="ui-widget">
<input class="form-control-lg mb-3" style="visibility:hidden;margin-left:10px;margin-right:10px" id="clave" required>

  <input type="hidden" id="id">
 
