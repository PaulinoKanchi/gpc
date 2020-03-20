<?php include_once('error.php');?>
<?php

$proveedor=$_POST['proveedor'];
$rfc=$_POST['rfc'];
$replegal=$_POST['replegal'];
$cumple1=$_POST['cumple1'];
$cumple2=$_POST['cumple2'];
$cumple3=$_POST['cumple3'];
$cumple4=$_POST['cumple4'];
$cumple5=$_POST['cumple5'];
$cumple6=$_POST['cumple6'];
$cumple7=$_POST['cumple7'];
$cumple8=$_POST['cumple8'];
$cumple9=$_POST['cumple9'];
$cumple10=$_POST['cumple10'];
$comentarios=$_POST['comentarios'];
$dictamen=$_POST['dictamen'];
$evaluador=$_POST['evaluador'];

$varc1="";
$varc3="";
$varc4="";
$varc5="";
$varc7="";
$varc8="";
$varc9="";
$varc10="";


  if($cumple1=="No Cumple"){
  $varc1="1.- No cuenta con faculades para suscribir contrato.";
  }
  if($cumple3=="No Cumple"){
  $varc3="3.- Manifiesto de nacionalidad.";
  }
  if($cumple4=="No Cumple"){
  $varc4="4.- Escrito sobre articulo 50 y 60 de la LAASSP.";
  }
  if($cumple5=="No Cumple"){
  $varc5="5.- Declaración de integridad.";
  }

  if($cumple7=="No Cumple"){
    $varc7=" 7.- Escrito de aceptación por el uso de medios electrónicos de comunicación.";
  }
  if($cumple8=="No Cumple"){
    $varc8=" 8.-Convenio de participación conjunta.";
  }
  if($cumple9=="No Cumple"){
    $varc9=" 9.-Origen de los Bienes y margen de preferencia.";
  }
  if($cumple10=="No Cumple"){
    $varc10=" 10.-No proporcione dirección de correo electrónico.";
  }
  $causades= $varc1 . $varc3 . $varc4 . $varc5 . $varc7 . $varc8 . $varc9 . $varc10 ;
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

if($cumple1!="No Aplica"||$cumple2!="No Aplica"||$cumple3!="No Aplica"||$cumple4!="No Aplica"||$cumple5!="No Aplica"||
$cumple6!="No Aplica"||$cumple7!="No Aplica"||$cumple8!="No Aplica"||$cumple9!="No Aplica"||$cumple10!="No Aplica"){

$query= "INSERT INTO `material_legal`(`representante_legal`,`rfc`,`razon_social`,`tecnica1`,`tecnica2`,
`tecnica3`,`tecnica4`,`tecnica5`,`tecnica6`,`tecnica7`,
`tecnica8`,`tecnica9`,`tecnica10`,`fechacreacion`,`evaluador`,`dictamen`,`comentarios`,`causadesechamiento`) VALUES ('$replegal','$rfc','$proveedor',
'$cumple1','$cumple2','$cumple3',
'$cumple4','$cumple5','$cumple6','$cumple7','$cumple8','$cumple9',
'$cumple10', CURRENT_TIMESTAMP,'$evaluador','$dictamen','$comentarios','$causades')";

$alta= mysqli_query($link, $query);

?>
<div style="text-align: right;width:1200px">
<style type="text/css" media="print">
.nover {display:none}
</style>
<SCRIPT LANGUAGE="JavaScript">
if (window.print) {
document.write('<form><input type="button" class="nover calendar" id="Imprimelo" value="Imprimir" onClick="javascript:window.print()"></form>');
}
</script>
<div>
<div>
<a class="dropdown-item" href="eva-leg-mat-ch.php?id=<?php echo $id;?>"> Nueva evaluación</a>
<!doctype html>
<html class="no-js h-100" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SEIM - Licitacion</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> </head>
<br></br>

<p style="float:left;margin-left:10px"><span class="text-uppercase page-subtitle">Evaluación Legal y Administrativa</span></p>
<p style="float:left;margin-left:10px"><h3 class="page-title">Material de Curación</h3></p> 


<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                     
                   
                      <tbody>

                        <tr>
                          <td>  <?php echo "RAZÓN SOCIAL:";?>
                          <td> <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 350px; height: 50px;" name="proveedor" id="proveedor" class="form-control-lg mb-3"  value="<?php echo $proveedor;?>" readonly>
                            <?php echo "REPRESENTANTE LEGAL:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="replegal" id="replegal" class="form-control-lg mb-3"  value="<?php echo $replegal;?>" readonly>
                           
                          
                        </tr>
                        
                        

                        
                        <tr>
                          <td>  <?php echo "RFC:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="rfc" id="rfc" class="form-control-lg mb-3"  value="<?php echo $rfc;?>" readonly>
                         
                        </tr>

                        
            
                    
                    
                    
                     </tbody>
                    </table>


                    </div>
                    </div>
                    </div>
                  </div>





<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <!--<div class="card-header border-bottom">
                    <h6 class="m-0">247 resultados encontrados</h6>
                  </div>-->
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">DOCUMENTACIÓN LEGAL</th>
                          <th scope="col" class="border-0">EVALUACION</th>
                       
                        
                        </tr>
                      </thead>
                   
                      <tbody>

                        <tr>

                          <td>  <?php echo "1. Acreditación de la personalidad jurídica";?></td>
                          
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple1" id="cumple1" class="form-control-lg mb-3"  value="<?php echo $cumple1;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "2.Copia simple por ambos lados de la identificación oficial vigente con fotografía. Verificar el nombre, firma autógrafa y fotografía del LICITANTE y/o su Representante Legal.";?></td>
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple2" id="cumple2" class="form-control-lg mb-3"  value="<?php echo $cumple2;?>" readonly></td>

                          </tr>
                         
                          <tbody>

<tr>
                          <td>  <?php echo "3. MANIFIESTO DE NACIONALIDAD Que el LICITANTE y el Representante Legal manifieste su nacionalidad.";?></td>
                      
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple3" id="cumple3" class="form-control-lg mb-3"  value="<?php echo $cumple3;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "4. Escrito de no encontrarse en los supuestos de los artículos 50 y 60 de la LAASSP."?></td> 
                         
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple4" id="cumple4" class="form-control-lg mb-3"  value="<?php echo $cumple4;?>" readonly></td>
                          </tr>
                          
                          <tbody>

<tr>

                          <td>  <?php echo "5. Declaración de Integridad"?></td>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple5" id="cumple5" class="form-control-lg mb-3"  value="<?php echo $cumple5;?>" readonly></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "6.Manifestación de estratificación de MIPYME para LICITANTES de nacionalidad mexicana. Que el LICITANTE manifieste cuál es su nivel de estratificación empresarial conforme al Formato L de la presente convocatoria."?></td> 
                        <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple6" id="cumple6" class="form-control-lg mb-3"  value="<?php echo $cumple6;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>

                          <td>  <?php echo "7.Escrito de aceptación por el uso de medios electrónicos de comunicación."?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple7" id="cumple7" class="form-control-lg mb-3"  value="<?php echo $cumple7;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "8. Convenio de Participación Conjunta Que las personas físicas o morales que se agrupen, lo acrediten a través de un acuerdo de voluntades."?></td>
                       
                          <td>    <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple8" id="cumple8" class="form-control-lg mb-3"  value="<?php echo $cumple8;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "9. Origen de los Bienes y margen de preferencia Origen de los Bienes y margen de preferencia"?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple9" id="cumple9" class="form-control-lg mb-3"  value="<?php echo $cumple9;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "10.Escrito en el que el LICITANTE proporcione una dirección de correo electrónico, y en caso contrario, indicar que no cuenta con el mismo."?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

                        
                        
                        </tr>

                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                  </div> 
                  <?php
                 
                  ?>
                 <p style="float:left;margin-left:10px"><br>CAUSA DE DESECHAMIENTO:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="desechamiento" id="desechamiento" class="form-control-lg mb-3"  value="<?php echo $varc1 . $varc3 . $varc4 . $varc5 . $varc7 . $varc8 . $varc9 . $varc10;?>" readonly></p>
                 <p style="float:left;margin-left:10px"><br>EVALUADOR:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="evaluador" id="evaluador" class="form-control-lg mb-3"  value="<?php echo $evaluador;?>" readonly></p>
                 <p style="float:left;margin-left:10px"> <br> DICTAMEN FINAL:   <input style="background-color:#dddddd;margin-right:170px; width: 600px; height: 50px;" name="dictamen" id="dictamen" class="form-control-lg mb-3"  value="<?php echo $dictamen;?>" readonly></p>
                 <p style="float:left;margin-left:10px"><br>    COMENTARIOS: <input style="background-color:#dddddd; margin-right:390px; width: 620px; height: 128px;" name="comentarios" id="comentarios" class="form-control-lg mb-3"  value="<?php echo $comentarios;?>" readonly></p>
                 <p style="float:left;margin-left:10px"><br> FIRMA DEL EVALUADOR: <input style="width: 550px; height: 60px;" name="firma" id="firma" class="form-control-lg mb-3"   readonly></p>
                 
                 
                 
                 
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



<?php
}else{
    echo "ERROR: NO SE PUEDE GUARDAR DEBIDO A QUE NO HAZ REALIZADO LA EVALUACION";
    ?>
    <br></br>
    <?php
    echo "REGRESA Y REALIZALA DE NUEVO";
    ?>
    
    <div>
<br><button class="btn btn-sm btn-accent ml-auto" onClick="window.location.href='<?=$_SERVER["HTTP_REFERER"]?>'"><i class="material-icons"></i>Regresar</button>
<?php
}

?>

