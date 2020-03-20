<?php


include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();

$mostrar= mysqli_query($link, "SELECT * FROM catalogo_medicamentos");
$libros= mysqli_query($link, "SELECT * FROM medicamentos_tecnica");
$libros2= mysqli_query($link, "SELECT * FROM material_tecnica");
$libroseconomicamed= mysqli_query($link, "SELECT * FROM medicamentos_economica");
$libroseconomicamat= mysqli_query($link, "SELECT * FROM material_economica");
$libroslegalmed= mysqli_query($link, "SELECT * FROM medicamentos_legal");
$libroslegalmat= mysqli_query($link, "SELECT * FROM material_legal");


?>
