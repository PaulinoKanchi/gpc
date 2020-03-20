<?php
	
	require ('../conexion.php');
	
	$id_cat_procesos = $_POST['id_cat_procesos'];
	
$queryM = "SELECT * FROM procesos_medicamentos as pm
join catalogo_medicamentos as cm on pm.id_cat_medicamentos = cm.id
WHERE pm.id_cat_procesos = '$id_cat_procesos'";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccione Clave</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['clave']."'>".$rowM['clave_med']." || ".$rowM['descripcion']."</option>";
		$clave=$rowM['clave'];
	}
	echo $html;
	
?>

<script>

</script>
