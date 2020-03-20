<?php include_once('error.php');?>
<head>
  <meta charset="utf-8">
  <title>Autocompletado de Mutiples campos Usando jQuery , Ajax , PHP y MySQL</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
$(function() {
            $("#clave12").autocomplete({
                source: "guardado-tec.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
                    $('#clave12').val(ui.item.clave12);
          
			     }
            });
		});
</script>
</head>
<body>
 
<div class="ui-widget">
  CLAVE:<input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" id="clave12" required>

  <input type="hidden" id="id">
 