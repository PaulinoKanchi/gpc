
<?php

include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();


$un=$_POST['username'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$tipo=$_POST['tipo'];
$ap=$_POST['apaterno'];
$am=$_POST['amaterno'];
$inst=$_POST['institucion'];
$puesto=$_POST['puesto'];
$tel=$_POST['telefono'];
$calle=$_POST['calle'];
$numeroext=$_POST['numeroext'];
$piso=$_POST['piso'];
$colonia=$_POST['colonia'];
$alcaldia=$_POST['alcaldia'];
$cp=$_POST['cp'];
$entidad=$_POST['entidad'];
$profesion=$_POST['profesion'];
$cedula=$_POST['cedula'];
$rfc=$_POST['rfc'];

$query="INSERT INTO `usuarios`(`username`, `password`, `nombre`, `APaterno`, `AMaterno`, `Institucion`, `Puesto`, `TelefonoOficina`, 
`Calle`, `NumeroExt`, `Piso`, `Colonia`, `AlcaldiaMunicipio`, `CP`, `EntFed`, `Profesion`, `NumCedula`, `RFC`, `tipouser`,fecha_creacion)
 VALUES ('$un','$pass','$name','$ap','$am','$inst','$puesto','$tel','$calle','$numeroext','$piso','$colonia',
 '$alcaldia','$cp','$entidad','$profesion','$cedula','$rfc','$tipo',CURRENT_TIMESTAMP)";
$alta= mysqli_query($link, $query);

echo 'USUARIO GUARDADO CORRECTAMENTE';



?>