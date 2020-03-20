<?php
$nombre=$_POST['usuario'];
$pass=$_POST['pass'];


if ($nombre=="bran" && $pass=="1234"){
    


header ('Location:sistema/index.php');

}
else{

header ('Location:error.html');

}
?>