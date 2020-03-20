<?php include_once('error.php');?>
<?php

    include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();




$mostrar= mysqli_query($link, "SELECT * FROM catalogo_medicamentos ORDER BY id ASC");

?>