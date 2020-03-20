<?php include_once('error.php');?>
<?php

include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();

   


    //$mostrar123= mysqli_query($link, "SELECT * FROM catalogo_procesos 
   // where id_medicamentos(proceso=id de medicamnetos");



   
$mostrar123= mysqli_query($link, "SELECT * FROM 
catalogo_procesos as cp 
where estatus=1");
//=id_medicamentos

$procesos= mysqli_query($link, "SELECT * FROM catalogo_medicamentos as c 
INNER JOIN procesos_medicamentos as p ON p.clave_med = c.clave
join catalogo_procesos as cp ON c.id_proceso=cp.id_cat_procesos
where cp.estatus=1");

$clave= mysqli_query($link, "SELECT * FROM catalogo_medicamentos as c 
INNER JOIN procesos_medicamentos as p ON p.clave_med = c.clave
join catalogo_procesos as cp ON c.id_proceso=cp.id_cat_procesos
");

$procesosmed= mysqli_query($link, "SELECT * FROM catalogo_procesos as c 
INNER JOIN procesos_medicamentos as p ON p.clave_med = c.clave
join catalogo_procesos as cp ON c.id_proceso=cp.id_cat_procesos
");

?>