<?php include_once('error.php');?>
<?php
if (isset($_GET['term'])){
	# conectare la base de datos
    $con=@mysqli_connect("localhost", "root", "", "evaluaciones");	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM catalogo_material as c INNER JOIN procesos_material as p ON p.clave_mat = c.clave
	where c.clave like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id=$row['id'];  	
		$row_array['value'] = $row['clave']." | ".$row['descripcion'];
		$row_array['clave']=$row['clave'];

		$partida=($row['partida']);
		$row_array['descripcion']=$row['descripcion'];
		$row_array['unidad']=$row['unidad'];
		$row_array['cantidad']=$row['cantidad'];
		$row_array['tipo']=$row['tipo'];
		$row_array['osopm']=$row['osopm'];
		$row_array['min']=$row['min'];
		$row_array['max']=$row['max'];
		$row_array['partida']=$partida;
		
		array_push($return_arr,$row_array);
		

		
	}    
}
/* Cierra la conexión. */
mysqli_close($con);
/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);
}
?>