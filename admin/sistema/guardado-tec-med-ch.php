<?php include_once('error.php');?>
<?php
$proveedor=$_POST['proveedor'];
$clave12=$_POST['clave'];
$proceso=$_POST['id_cat_procesos'];
$unidad=$_POST['unidad'];
$cantidad=$_POST['cantidad'];
$tipo=$_POST['tipo1'];
$osopm=$_POST['osopm'];
$partida=$_POST['partida'];
$max=$_POST['max'];
$min=$_POST['min'];
$descripcion=$_POST['descripcion'];
$cbx_municipio=$_POST['cbx_municipio'];

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

$mostrar1= mysqli_query($link, "SELECT * FROM medicamentos_tecnica");
$ck=0;
include 'eva-tec-med.php';
while ($row = mysqli_fetch_row($mostrar1)) {
  
  if(($clave12=="$row[1]")&&($proveedor=="$row[4]")){

    $ck=1;
}
}
if($clave12==""){
  $ck=1;
}
if($ck==2){

 echo'<script type="text/javascript">
    alert("Esa Evaluación ya se Encuentra Realizada, por Favor Intenta con Otra") ;
    window.location.href="javascript:window.history.back();";
    </script>';
    $ck=0;
}else if($proveedor=="Seleccione Proveedor"){
  echo'<script type="text/javascript">
  alert("Seleccione un proveedor.") ;
  window.location.href="javascript:window.history.back();";
  </script>';
}else{
  //header("Location: eva-tec-med.php?proveedor=$proveedor&clave12=$clave12&username=$usertra&proceso=$proceso&tipo=$tipoo&nombre=$nombre&APaterno=$APaterno&AMaterno=$AMaterno");
?><div style="display:none"><?php
 include 'eva-tec-med.php';
 
}
?>
  </div>
<div style="text-align: right;width:1200px">
<style type="text/css" media="print">
.nover {display:none}
</style>

<script>

if(<?php echo $ck?>==1){
  alert("Esa Evaluación ya se Encuentra Realizada, por Favor Intenta con Otra") ;
  window.location.href = "eva-tec-med-ch.php?id=<?php echo $id?>";

}

</script>

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


    <script>

</script>






