<?php include_once('error.php');?>
<?php
$id=$_POST['id'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];
$APaterno=$_POST['APaterno'];
$AMaterno=$_POST['AMaterno'];
$puesto=$_POST['puesto'];
$telofi=$_POST['telofi'];

$calle=$_POST['calle'];
$numext=$_POST['numext'];
$piso=$_POST['piso'];
$colonia=$_POST['colonia'];
$alcaldia=$_POST['alcaldia'];
$cp=$_POST['cp'];
$entidad=$_POST['entidad'];
$profesion=$_POST['profesion'];
$cedula=$_POST['cedula'];
$rfc=$_POST['rfc'];
$inst=$_POST['institucion'];
$tipo=$_POST['tipo'];


    include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();



$query="update usuarios set username='$username', password='$pass', nombre='$nombre', APaterno='$APaterno', AMaterno='$AMaterno', Institucion='$inst',Puesto='$puesto', TelefonoOficina=$telofi, 
Calle='$calle', NumeroExt='$numext', Piso='$piso', Colonia='$colonia', AlcaldiaMunicipio='$alcaldia', CP=$cp, EntFed='$entidad', Profesion='$profesion', NumCedula='$cedula', RFC='$rfc', tipouser='$tipo' where id=$id";
 
$alta= mysqli_query($link, $query);

echo 'USUARIO MODIFICADO CORRECTAMENTE';



?>

