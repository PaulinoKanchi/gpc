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
$cumple11=$_POST['cumple11'];
$cumple12=$_POST['cumple12'];
$cumple13=$_POST['cumple13'];
$cumple14=$_POST['cumple14'];
$cumple15=$_POST['cumple15'];
$comentarios=$_POST['comentarios'];
$dictamen=$_POST['dictamen'];
$evaluador=$_POST['evaluador'];
$proceso=$_POST['proceso'];
$pais=$_POST['pais'];

$varc1="";
$varc2="";
$varc3="";
$varc4="";
$varc6="";
$varc5="";
$varc7="";
$varc8="";
$varc9="";
$varc10="";
$varc11="";
$varc12="";
$varc13="";
$varc14="";
$varc15="";
$varvar="";

  if($cumple1=="No Cumple"){
  $varc1="1.- No cuenta con faculades para suscribir contrato.";
  }
  if($cumple2=="No Cumple"){
    $varc1="2.- No presenta copia de la identificación oficial.";
    }
  if($cumple3=="No Cumple"){
  $varc3="3.- No presenta RFC.";
  }
  if($cumple4=="No Cumple"){
  $varc4="4.- No presenta comprobante de domicilio.";
  }
  if($cumple5=="No Cumple"){
  $varc5="5.- Manifiesto de nacionalidad.";
  }

  if($cumple6=="No Cumple"){
    $varc6="6.- Escrito sobre articulo 50 y 60 de la LAASSP.";
    }

  if($cumple7=="No Cumple"){
    $varc7=" 7.- No presenta declaracion de integridad  ";
  }
  if($cumple8=="No Cumple"){
    $varc8=" 8.- No presenta MIPYME";
  }
  if($cumple9=="No Cumple"){
    $varc9=" 9.-Origen de los Bienes ";
  }
  if($cumple10=="No Cumple"){
    $varc10=" 10.-No presenta acta constitutiva";
  }
  if($cumple11=="No Cumple"){
    $varc11=" 11.- No presenta conflicto de intereses";
  }
  if($cumple12=="No Cumple"){
    $varc12=" 12.-  No presentó documento de cumplimiento de obligaciones 'IMSS'";
  }
  if($cumple13=="No Cumple"){
    $varc13=" 13.-No presentó documento de cumplimiento de obligaciones 'SAT'";
  }
  if($cumple14=="No Cumple"){
    $varc14=" 14.-   No presentó documento de cumplimiento de obligaciones 'INFONAVIT'";
  }
  if($cumple15=="No Cumple"){
    $varc15=" 15.- No presentó documento que acredite la titularidad de derechos exclusivos";
  }

  if(($cumple1!="No Cumple")&&($cumple2!="No Cumple")&&($cumple3!="No Cumple")
  &&($cumple4!="No Cumple")&&($cumple5!="No Cumple")&&($cumple6!="No Cumple")
  &&($cumple7!="No Cumple")&&($cumple8!="No Cumple")&&($cumple9!="No Cumple")
  &&($cumple10!="No Cumple")&&($cumple11!="No Cumple")&&($cumple12!="No Cumple")
  &&($cumple13!="No Cumple")&&($cumple14!="No Cumple")&&($cumple15!="No Cumple")
  /*&&($cumple13!="No Cumple")&&($cumple14!="No Cumple")*/){
    $varvar="No Aplican";
  }




  $causades= $varc1 . $varc2 . $varc3 . $varc4 . $varc5 . $varc6 . $varc7 . $varc8 . $varc9 . $varc10. $varc11. $varc12. $varc13. $varc14. $varc15;

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
$cumple6!="No Aplica"||$cumple7!="No Aplica"||$cumple8!="No Aplica"||$cumple9!="No Aplica"||$cumple10!="No Aplica"||
$cumple11!="No Aplica"||$cumple12!="No Aplica"||$cumple13!="No Aplica"||$cumple14!="No Aplica"||$cumple15!="No Aplica"){


$query="INSERT INTO `medicamentos_legal` (`representante_legal`, `rfc`, `razon_social`, `fechacreacion`, 
`tecnica1`, `tecnica2`, `tecnica3`, `tecnica4`, `tecnica5`, `tecnica6`, `tecnica7`, `tecnica8`, `tecnica9`, 
`tecnica10`, `tecnica11`, `tecnica12`, `tecnica13`, `tecnica14`, `tecnica15`, `evaluador`, `id`, `dictamen`,
 `comentarios`, `fechaexp`, `fechaven`, `causadesechamiento`, `proceso`, `pais`) 
 VALUES ('$replegal', '$rfc', '$proveedor ',CURRENT_TIMESTAMP, '$cumple1','$cumple2','$cumple3',
'$cumple4','$cumple5','$cumple6','$cumple7','$cumple8','$cumple9','$cumple10','$cumple11','$cumple12',
'$cumple13','$cumple14','$cumple15', '$evaluador', NULL, '$dictamen', '$comentarios',
  NULL, NULL, '$causades', '$proceso', '$pais')";

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
<a class="dropdown-item" href="eva-leg-med-ch.php?id=<?php echo $id;?>"> Nueva evaluación</a>
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
<p style="float:left;margin-left:10px"><h3 class="page-title">Medicamentos</h3></p> 

<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                     
                   
                      <tbody>

                        <tr>
                          <td>  <?php echo "RAZÓN SOCIAL:";?>
                          <td> <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 500px; height: 50px;" name="proveedor" id="proveedor" class="form-control-lg mb-3"  value="<?php echo $proveedor;?>" readonly>
                           
                           <br> <?php echo "REPRESENTANTE LEGAL:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px; width: 500px; height: 50px;" name="replegal" id="replegal" class="form-control-lg mb-3"  value="<?php echo $replegal;?>" readonly>
                           
                          
                        </tr>
                        
                        

                        
                        <tr>
                          <td>  <?php echo "RFC:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="rfc" id="rfc" class="form-control-lg mb-3"  value="<?php echo $rfc;?>" readonly>
                          <td>  <?php echo "Proceso:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="rfc" id="rfc" class="form-control-lg mb-3"  value="<?php echo $proceso;?>" readonly>
                         
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
                          <td>  <?php echo "3. RFC";?></td>
                      
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple3" id="cumple3" class="form-control-lg mb-3"  value="<?php echo $cumple3;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "4. Comprobante de domicilio"?></td> 
                         
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple4" id="cumple4" class="form-control-lg mb-3"  value="<?php echo $cumple4;?>" readonly></td>
                          </tr>
                          
                          <tbody>

<tr>

                          <td>  <?php echo "5. MANIFIESTO DE NACIONALIDAD Que el LICITANTE y el Representante Legal manifieste su nacionalidad. "?></td>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple5" id="cumple5" class="form-control-lg mb-3"  value="<?php echo $cumple5;?>" readonly></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "6.Escrito de no encontrarse en los supuestos de los artículos 50 y 60 de la LAASSP."?></td> 
                        <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple6" id="cumple6" class="form-control-lg mb-3"  value="<?php echo $cumple6;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>

                          <td>  <?php echo "7.Declaración de Integridad. "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple7" id="cumple7" class="form-control-lg mb-3"  value="<?php echo $cumple7;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "8. Manifestación de estratificación de MIPYME para LICITANTES de nacionalidad mexicana. Que el LICITANTE manifieste cuál es su nivel de estratificación empresarial conforme al Formato L de la presente convocatoria. "?></td>
                       
                          <td>    <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple8" id="cumple8" class="form-control-lg mb-3"  value="<?php echo $cumple8;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "9. Origen de los Bienes y margen de preferencia. "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple9" id="cumple9" class="form-control-lg mb-3"  value="<?php echo $cumple9;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "10.Acta constitutiva "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "11.  Conflicto de interes  "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "12. Opinión positiva de cumplimiento de obligaciones 'IMSS' "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "13. Opinión positiva de cumplimiento de obligaciones 'SAT' "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "14.  Opinión positiva de cumplimiento de obligaciones 'INFONAVIT'   "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "15. Documento que acredite la titularidad de derechos exclusivos, patente o fuente única a nombre del proveedor que se evalúa y emitido por la autoridad competente "?></td>
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
                 
                  <p style="float:left;margin-left:10px"><br>DESECHAMIENTO:  <textarea name="desechamiento" id="desechamiento" cols="40" rows="5" maxlength="5000" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo $varc1 ."\n" .$varc2 ."\n" . $varc3 ."\n" . $varc4 ."\n" . $varc5 ."\n" .$varc6 ."\n" .$varc7 ."\n" .$varc8 ."\n" .$varc9 ."\n" .$varc10 ."\n" .$varc11 ."\n" .$varc12 ."\n".$varc13 ."\n".$varc14 ."\n".$varc15 ."\n".$varvar;?></textarea></p>
                  <p style="float:left;margin-left:10px"><br>EVALUADOR:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="evaluador" id="evaluador" class="form-control-lg mb-3"  value="<?php echo $evaluador;?>" readonly></p>
                 <p style="float:left;margin-left:10px"> <br> DICTAMEN FINAL:   <input style="background-color:#dddddd;margin-right:170px; width: 600px; height: 50px;" name="dictamen" id="dictamen" class="form-control-lg mb-3"  value="<?php echo $dictamen;?>" readonly></p>
                 <p style="float:left;margin-left:10px"><br>COMENTARIOS:<textarea name="comentarios" id="comentarios" cols="40" rows="5" maxlength="5000" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo $comentarios; ?></textarea></p>
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


