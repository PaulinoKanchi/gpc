<?php
	
	require ('../conexion.php');
	
	$id_cat_procesos = $_POST['id_cat_procesos'];
	
$queryM = "SELECT * FROM procesos_material as pm
join catalogo_material as cm on pm.clave_mat = cm.clave
WHERE pm.id_cat_procesos = '$id_cat_procesos'";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccione Clave</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['clave']."'>".$rowM['clave_mat']." || ".$rowM['descripcion']."</option>";
		$clave=$rowM['clave'];
	}
	echo $html;
	
?>

<script>

</script>
