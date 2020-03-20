<?php include_once('error.php');?>
<?php
$proveedor=$_POST['proveedor'];
$proceso=$_POST['proceso'];
//$clave12=$_POST['clave12conp'];



include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();
$id=$_GET['id'];

$consulta= mysqli_query($link, "SELECT * FROM usuarios where id=$id");

while ($row = mysqli_fetch_row($consulta)) {
  $usertra=$row[0];
  $tipoo=$row[20];
  $nombre=$row[2];
  $APaterno=$row[4];
  $AMaterno=$row[5];
     }

$mostrar1= mysqli_query($link, "SELECT * FROM medicamentos_legal");
$ck=0;
while ($row = mysqli_fetch_row($mostrar1)) {
  
  if(($proveedor=="$row[2]")&&($proceso=="$row[26]")){

    $ck=1;
}
}
if($ck==1){

 echo'<script type="text/javascript">
    alert("El proveedor seleccionado ya ha sido evaluado, por favor intente con otro.") ;
    window.location.href="javascript:window.history.back();";
    </script>';
    $ck=0;
}else{
  //header("Location: eva-leg-med.php?username=$usertra&tipo=$tipoo&nombre=$nombre&APaterno=$APaterno&AMaterno=$AMaterno&proveedor=$proveedor");
include ("eva-leg-med.php");
}
?>




                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>
    <script type="text/javascript">   </script>



