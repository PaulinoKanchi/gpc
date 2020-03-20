<?php include_once('error.php');?>
<?php
$rs=$_POST['rs'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$rel=$_POST['rel'];
$rfc=$_POST['rfc'];

    include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();




$query= "INSERT INTO proveedores (razon_social,email,rfc,telefono,representante_legal,fecha_creacion) VALUES ('$rs','$email','$rfc',$tel,'$rel', CURRENT_TIMESTAMP)";
$alta= mysqli_query($link, $query);

echo 'PROVEEDOR ALMACENADO CORRECTAMENTE';



?>

