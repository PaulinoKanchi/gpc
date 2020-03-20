<?php include_once('error.php');?>
<?php
$rs=$_POST['rs'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$rel=$_POST['rel'];
$rfc=$_POST['rfc'];
$id=$_POST['id'];


    include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();




$query= "update proveedores set razon_social='$rs',email='$email',rfc='$rfc',telefono='$tel',representante_legal='$rel' 
where id=$id";
$alta= mysqli_query($link, $query);

echo 'PROVEEDOR MODIFICADO CORRECTAMENTE';



?>

