<?php include_once('error.php');?>
<?php

include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();




$mostrar= mysqli_query($link, "SELECT * FROM proveedores ORDER BY razon_social ASC");

$mostrarsoloregistrados= mysqli_query($link, "SELECT * FROM medicamentos_tecnica 
");



       



?>