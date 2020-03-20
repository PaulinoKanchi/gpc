<?php include_once('error.php');?>
<?php

include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();


$mostrarreportes= mysqli_query($link, "SELECT * FROM medicamentos_tecnica ORDER BY id ASC");



?>