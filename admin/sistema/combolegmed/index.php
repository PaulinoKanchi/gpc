<?php
	require ('conexion.php');
	
	$query = "SELECT id_cat_procesos,procedimiento,proceso,estatus FROM catalogo_procesos
	where estatus=1";
	$resultado=$mysqli->query($query);
?>

<html>
	<head>
		
		<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
		
		<script language="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {

					$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						id_cat_procesos = $(this).val();
						$.post("../sistema/combo/includes/getMunicipio.php", { id_cat_procesos: id_cat_procesos }, function(data){
							$("#cbx_municipio").html(data);
							
						});            
					});
				})
			});
			$(document).ready(function(){
				$("#cbx_municipio").change(function () {

					$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						id_cat_procesos = $(this).val();
						$.post("../sistema/combo/includes/llenado.php", { id_cat_procesos: id_cat_procesos }, function(data){
							$("#cantidad").html(data);
							
						});            
					});
				})
			});
		</script>
		
	</head>
	
	<body>
		<form name="combo" action="guarda.php" method="POST" onclick="clacla()">
			<div>Procedimiento : <select class="mi-selector form-control-lg mb-12" name="id_cat_procesos" id="cbx_estado">
				<option value="0">Seleccione Procedimiento</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_cat_procesos']; ?>"><?php echo $row['proceso'] ." || " .$row['procedimiento'] ; ?></option>
				<?php } ?>
			</select></div>
			
			<br />
			
			<div>Clave : <select onchange="mostrarprecio()" style="width:1000px" class="mi-selector form-control-lg mb-12" name="cbx_municipio" id="cbx_municipio"></select></div>

		</form>
	</body>
</html>
<!--<button onclick="myFunction()">Try it</button>-->

<script>


function mostrarprecio() {
	document.getElementById('clave').value = document.getElementById('cbx_municipio').value;
	document.getElementById('clave123').value = document.getElementById('cbx_municipio').value;

}
</script>
