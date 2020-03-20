<?php include_once('error.php');?>
<?php


$clave=$_POST['clave12'];
$partida=$_POST['partida'];
$proveedor=$_POST['proveedor'];
$proceso=$_POST['proceso'];
$pais=$_POST['pais'];
$regsan=$_POST['registrosan'];
$osopm=$_POST['osopm'];
$min=$_POST['min'];
$max=$_POST['max'];
$descripcion=$_POST['descripcion'];
$minofertada=$_POST['minofertada'];
$maxofertada=$_POST['maxofertada'];
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

/*$cumple13=$_POST['cumple13'];
$cumple14=$_POST['cumple14'];
$cumple15=$_POST['cumple15'];
*/
$comentarios=$_POST['comentarios'];
$beneficios=$_POST['beneficios'];
$dictamen=$_POST['dictamen'];
$evaluador=$_POST['evaluador'];
$fechaven=$_POST['fechaven'];
$fechaexp=$_POST['fechaexp'];
$unidad=$_POST['unidad'];
$tipo=$_POST['tipo'];
$cant=$_POST['cantidad'];
$fechasolicitud3=$_POST['fechasolicitud3'];
$fechaacuse4=$_POST['fechaacuse4'];
$caracteristicas=$_POST['caracteristicas'];


$varc1="";
$varc2="";
$varc3="";
$varc4="";
$varc5="";
$varc6="";
$varc7="";
$varc8="";
$varc9="";
$varc10="";
$varc11="";

/*$varc13="";
$varc14="";
$varc15="";*/
$varvar="";


  if($cumple1=="No Cumple"){
  $varc1="1.- Formato de Propuesta Técnica.";
  }
  if($cumple2=="No Cumple"){
  $varc2="2.- Registro Sanitario.";
  }
  if($cumple3=="No Cumple"){
  $varc3="3.- Formato de datos generales.";
  }
  if($cumple4=="No Cumple"){
  $varc4="4.- IPP-R y/o Proyecto de Marbete.";
  }
  if($cumple5=="No Cumple"){
  $varc5="5.- No presenta documento que sustituya al Registro Sanitario.";
  }
  if($cumple6=="No Cumple"){
  $varc6="6.- Constancia emitida por la COFEPRIS en la que se manifieste que el bien ofertado no requiere de Registro Sanitario.";
  }
  if($cumple7=="No Cumple"){
  $varc7="7.- Licencia Sanitaria.";
  }
  if($cumple8=="No Cumple"){
  $varc8="8.- Aviso del Responsable Sanitario con clave SCIAN.";
  }
  if($cumple9=="No Cumple"){
  $varc9="9.- Manifiesto de cumplimiento de normas.";
  }
  if($cumple10=="No Cumple"){
  $varc10="10.- Carta compromiso para canje de medicamentos no consumidos.";
  }
  if($cumple11=="No Cumple"){
  $varc11="11.- Carta compromiso de garantía contra vicios oculto.";
  }
  
  /*if($cumple13=="No Cumple"){
  $varc13="13.- Formato de Propuesta Técnica.";
  }
  if($cumple14=="No Cumple"){
  $varc14="14.- Manifiesto de pruebas.";
  } 
  if($cumple15=="No Cumple"){
  $varc15="15.- Formato de Propuesta Técnica.";
  }*/
  if(($cumple1!="No Cumple")&&($cumple2!="No Cumple")&&($cumple3!="No Cumple")
  &&($cumple4!="No Cumple")&&($cumple5!="No Cumple")&&($cumple6!="No Cumple")
  &&($cumple7!="No Cumple")&&($cumple8!="No Cumple")&&($cumple9!="No Cumple")
  &&($cumple10!="No Cumple")&&($cumple11!="No Cumple")
  /*&&($cumple13!="No Cumple")&&($cumple14!="No Cumple")*/){
    $varvar="No Aplican";
  }
  
  $causades= $varc1 . $varc2 . $varc3 . $varc4 . $varc5 . $varc6 . $varc7
  . $varc8 . $varc9 . $varc10 . $varc11  /*. $varc13 . $varc14 */. $varvar;

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
$cumple11!="No Aplica"/*||$cumple13!="No Aplica"||$cumple14!="No Aplica"*/){

$query= "INSERT INTO `medicamentos_tecnica`(`descripcion`,`clave12`,`ospm`,`partida`,`proveedor`,`registro_sanitario`,`pais`,
`tecnica_minima`,`tecnica_maxima`,`minofertada`,`maxofertada`,`tecnica1`,`tecnica2`,
`tecnica3`,`tecnica4`,`tecnica5`,`tecnica6`,`tecnica7`,
`tecnica8`,`tecnica9`,`tecnica10`,`tecnica11`,`fechacreacion`,`evaluador`,`dictamen`,`comentarios`,`fechaexp`,`fechaven`,
`unidad`,`tipo`,`cant`,`fechaacuse4`,`fechasolicitud3`,`causadesechamiento`,`proceso`,`beneficios`) VALUES ('$descripcion','$clave',
'$osopm','$partida','$proveedor','$regsan','$pais',
$min,$max,$minofertada,$maxofertada,'$cumple1','$cumple2','$cumple3',
'$cumple4','$cumple5','$cumple6','$cumple7','$cumple8','$cumple9',
'$cumple10','$cumple11',
CURRENT_TIMESTAMP,'$evaluador',
'$dictamen','$comentarios','$fechaexp','$fechaven','$unidad','$tipo',$cant,'$fechaacuse4','$fechasolicitud3','$causades',
'$proceso','$beneficios')";

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
<br>
<a class="dropdown-item" href="eva-tec-med-ch.php?id=<?php echo $id;?>"> Nueva evaluación</a>
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

<p style="float:left;margin-left:10px"><span class="text-uppercase page-subtitle">Evaluación Técnica</span></p>
<p style="float:left;margin-left:10px"><h3 class="page-title">Medicamentos</h3></p> 
<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                     
                   
                      <tbody>

                        <tr>

                        
                          <td>  <?php echo "CLAVE:";?>
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="clave" id="clave" class="form-control-lg mb-3"  value="<?php echo $clave;?>" readonly>
                          <?php echo "PROCESO:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px; width: 300px;" name="proceso" id="proceso" class="form-control-lg mb-3"  value="<?php echo $proceso;?>" readonly>
                          <div> <?php echo "PARTIDA:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="partida" id="partida" class="form-control-lg mb-3"  value="<?php echo $partida;?>" readonly>
                           <?php echo "PROVEEDOR:";?>
                          <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 500px; height: 50px;" name="proveedor" id="proveedor" class="form-control-lg mb-3"  value="<?php echo $proveedor;?>" readonly>
                         </tr>
                        
                        
                      <td><center><span class="text-uppercase page-subtitle">PRESENTACION</span></center>
                      
                      <tr>
                          <td>  <?php echo "UNIDAD:";?>
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="unidad" id="unidad" class="form-control-lg mb-3"  value="<?php echo $unidad;?>" readonly>
                            <?php echo "TIPO:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="tipo" id="tipo" class="form-control-lg mb-3"  value="<?php echo $tipo;?>" readonly>
                           <?php echo "CANTIDAD:";?>
                          <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 350px; height: 50px;" name="cant" id="cant" class="form-control-lg mb-3"  value="<?php echo $cant;?>" readonly>
                        </tr>
                        
                        <tr>
                          <td>  <?php echo "PAIS DE ORIGEN:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="pais" id="pais" class="form-control-lg mb-3"  value="<?php echo $pais;?>" readonly>
                          <?php echo "OSD o PMR:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="osopm" id="osopm" class="form-control-lg mb-3"  value="<?php echo $osopm;?>" readonly>
                          <?php echo "REGISTRO SANITARIO:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="regsan" id="regsan" class="form-control-lg mb-3"  value="<?php echo $regsan;?>" readonly>
                          <br><?php echo "FECHA DE EXPEDICION RS:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechaexp" id="fechaexp" class="form-control-lg mb-3"  value="<?php echo $fechaexp;?>" readonly>
                          <?php echo "FECHA DE VENCIMIENTO RS:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechaven" id="fechaven" class="form-control-lg mb-3"  value="<?php echo $fechaven;?>" readonly>
                        
                        </tr>

                        
                        <tr>
                          <td>  <?php echo "Cantidad Max. Solicitada:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="max" id="max" class="form-control-lg mb-3"  value="<?php echo $max;?>" readonly>
                          <?php echo "Cantidad Min. Solicitada:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="min" id="min" class="form-control-lg mb-3"  value="<?php echo $min;?>" readonly>
                          Clasificacion Administrativa: <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="caracteristicas" class="form-control-lg mb-3" name="caracteristicas" type="text" value="<?php echo $caracteristicas; ?>" readonly>

                        </tr>

                        
                      
                        
                        <tr>
                          <td>  <?php echo "Cantidad Max. Ofertada:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="maxofertada" id="maxofertada" class="form-control-lg mb-3"  value="<?php echo $maxofertada;?>" readonly>
                          <?php echo "Cantidad Min. Ofertada:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="minofertada" id="minofertada" class="form-control-lg mb-3"  value="<?php echo $minofertada;?>" readonly>
                        
                        </tr>

                        <tr>
                          <td>  <?php echo "DESCRIPCION:";?></td>
                          <td>  <textarea id="descripcion" name="descripcion" cols="40" rows="5" maxlength="5000" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo $descripcion;?></textarea></td>
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
                          <th scope="col" class="border-0">DOCUMENTACIÓN TECNICA</th>
                          <th scope="col" class="border-0">EVALUACION</th>
                          <th scope="col" class="border-0">OTROS</th>
                        
                        </tr>
                      </thead>
                   
                      <tbody>

                        <tr>

                          <td>  <?php echo "1. FORMATO DE PROPUESTA TÉCNICA. Relación detallada únicamente de las partidas que oferte, donde indique el número de partida, clave a 12 dígitos, denominación genérica, descripción, presentación, cantidad solicitada, cantidad ofertada, marca o denominación distintiva, fabricante, registro sanitario y país de origen; y para el caso de ISSSTE y PEMEX incluir código de barras.";?></td>
                          
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple1" id="cumple1" class="form-control-lg mb-3"  value="<?php echo $cumple1;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "2.Por cada partida que oferte, deberá anexar copia legible del “REGISTRO SANITARIO” (anverso y reverso) vigente, MODIFICACIÓN o su tramite con el anexo correspondiente que contenga la descripción y autorización para cada una de las partidas. En su caso, FORMATO DE SOLICITUD DE PRÓRROGA del Registro Sanitario, siempre y cuando haya sido presentada con cuando menos 150 días naturales de anticipación al  vencimiento, indicando número  de  entrada  del  trámite,  y nombre del producto. Así como acuse de recibido del trámite sometido ante COFEPRIS.
";?></td>
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple2" id="cumple2" class="form-control-lg mb-3"  value="<?php echo $cumple2;?>" readonly></td>

                          </tr>
                         
                          <tbody>

<tr>
                          <td>  <?php echo "3. Datos generales y notificaciones oficiciales de los proveedores
                                  En su propuesta técnica deberán proporcionar el contacto designado para atender cualquier asunto correspondiente a la calidad de los insumos contratados, debiendo incluir los siguientes datos: • Nombre completo del contacto oficial. • Cargo. • Domicilio. • Teléfono de oficina, número de extensión y número celular. • Correo electrónico. ";?></td>
                      
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple3" id="cumple3" class="form-control-lg mb-3"  value="<?php echo $cumple3;?>" readonly></td>
                          <td> FECHA DE SOLICITUD DE PRORROGA:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechasolicitud3" id="fechasolicitud3" class="form-control-lg mb-3"  value="<?php echo $fechasolicitud3;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "4. Indicación para Prescribir Reducida (IPP-R) y proyecto de marbete. En el caso de que la descripción del bien ofertado no se encuentre completamente detallada en el Registro Sanitario, el LICITANTE deberá integrar como parte de su propuesta técnica la Información para Prescribir Reducida (IPP-R) y/o proyecto de marbete."?></td> 
                         
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple4" id="cumple4" class="form-control-lg mb-3"  value="<?php echo $cumple4;?>" readonly></td>
                          <td> FECHA DE ACUSE:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechaacuse4" id="fechaacuse4" class="form-control-lg mb-3"  value="<?php echo $fechaacuse4;?>" readonly></td>
                          </tr>
                          
                          <tbody>

<tr>

                          <td>  <?php echo "5.  CARTA DE GARANTIA DE ABASTECIMIENTO"?></td>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple5" id="cumple5" class="form-control-lg mb-3"  value="<?php echo $cumple5;?>" readonly></td>

                          </tr>
                         <!-- <tbody>

<tr>
                          <td>  <?php echo "6. Constancia emitida por la COFEPRIS en la que se manifieste que el bien ofertado no requiere de Registro Sanitario, en la que indique de manera expresa la clave y/o descripción del mismo."?></td> 
                        <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple6" id="cumple6" class="form-control-lg mb-3"  value="<?php echo $cumple6;?>" readonly></td>
                          </tr>-->
                          <tbody>

<tr>

                          <td>  <?php echo "6.  Copia de la Licencia Sanitaria (vigente y Legible) Aplicable para los medicamentos a que se refieren a los grupos  I al VI, de la clasificación para su venta y comercialización, del artículo 226 de la Ley General de Salud, a nombre del LICITANTE.
                                  En caso de modificación, presentar copia legible de la Licencia Sanitaria y copia de la modificación autorizada por la COFEPRIS."?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple6" id="cumple6" class="form-control-lg mb-3"  value="<?php echo $cumple6;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "7. 	Copia del Aviso del Responsable Sanitario y/o aviso de funcionamiento con la clave SCIAN presentado ante COFEPRIS, con sellos legibles, así como el número de ingreso del trámite en comento."?></td>
                       
                          <td>    <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple7" id="cumple7" class="form-control-lg mb-3"  value="<?php echo $cumple7;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "8. 	MANIFIESTO DE CUMPLIMIENTO DE NORMAS, en hoja membretada suscrito por el Titular del Registro Sanitario o su representante legal en México, de que los medicamentos ofertados cumplen con lo establecido en la Ley General de Salud, en los artículos aplicables, en las Normas Oficiales Mexicanas, Normas Mexicanas, Normas Internacionales, señalando cuales le resultan aplicables y a falta de éstas, de acuerdo a las especificaciones técnicas del fabricante, de conformidad con lo dispuesto en los artículos 53 y 55 de la Ley Federal sobre Metrología y Normalización; o bien, deberán cumplir con las características y especificaciones requeridas en el presente Anexo Técnico, por la(s) clave(s) en la(s) que participe."?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple8" id="cumple8" class="form-control-lg mb-3"  value="<?php echo $cumple8;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "9. 	Carta compromiso en la cual se obliguen a canjear los medicamentos no sean consumidos dentro de su vida útil, dentro de un plazo de 15 días hábiles posteriores a la solicitud formal por parte de las ÁREAS REQUIRENTES, sin costo alguno para estas últimas."?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple9" id="cumple9" class="form-control-lg mb-3"  value="<?php echo $cumple9;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "10. 	Carta   compromiso   de   garantía   contra   vicios   ocultos   y   de   mala   calidad   de   los medicamentos entregados"?></td>
                       
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3"  value="<?php echo $cumple10;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "11. 	Escrito en el que manifieste: “que de resultar adjudicado se comprometerá a realizar, cuando así se considere necesario y a solicitud de las ÁREAS REQUIRENTES, en un plazo no mayor a cinco días hábiles posteriores a la notificación de la solicitud, las pruebas que acrediten la correspondencia de los resultados con las especificaciones, calidad del insumo y valores indicados en la Farmacopea de los Estados Unidos Mexicanos, elaborados por un laboratorio de pruebas “Tercero Autorizado” por la COFEPRIS, obligándose a hacer entrega del resultado de las mismas en un plazo no mayor a dos días hábiles posterior a su emisión”, sin costo alguno para las ÁREAS REQUIRENTES. Con lo que se dará cumplimiento al numeral 2 del presente Anexo Técnico."?></td>
                          <td>    <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple11" id="cumple11" class="form-control-lg mb-3"  value="<?php echo $cumple11;?>" readonly></td>
                          </tr>
                          <tbody>

<!--<tr>
                          <td>  <?php echo "13."?></td>
                      
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple13" id="cumple13" class="form-control-lg mb-3"  value="<?php echo $cumple13;?>" readonly></td>
                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "14. "?></td>
                          <td>   <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple14" id="cumple14" class="form-control-lg mb-3"  value="<?php echo $cumple14;?>" readonly></td>
                          </tr>
                          <tbody>

                          </tr>-->
                         
                        
                        
                        </tr>

                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                  </div> 

                  <?php
                 
                  ?>

                       
                          
<p style="float:left;margin-left:10px"><br>DESECHAMIENTO:  <textarea name="desechamiento" id="desechamiento" cols="40" rows="5" maxlength="5000" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo "\n" .$varvar .$varc1 ."\n" .$varc2 ."\n" . $varc3 ."\n" . $varc4 ."\n" . $varc5 ."\n" .$varc6 ."\n" .$varc7 ."\n" .$varc8 ."\n" .$varc9 ."\n" .$varc10 ."\n" .$varc11;?></textarea></p>
                       
                 <p style="float:left;margin-left:10px"><br>EVALUADOR:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="evaluador" id="evaluador" class="form-control-lg mb-3"  value="<?php echo $evaluador;?>" readonly></p>
                 <p style="float:left;margin-left:10px"> <br> DICTAMEN FINAL:   <input style="background-color:#dddddd;margin-right:170px; width: 600px; height: 50px;" name="dictamen" id="dictamen" class="form-control-lg mb-3"  value="<?php echo $dictamen;?>" readonly></p>
                 <p style="float:left;margin-left:10px"><br>BENEFICIOS:<textarea name="beneficios" id="beneficios" cols="40" rows="5" maxlength="5000" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo $beneficios; ?></textarea></p>
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