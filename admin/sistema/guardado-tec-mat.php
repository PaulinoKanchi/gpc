<?php include_once('error.php'); ?>
<?php

$clave = $_POST['clave12'];
$partida = $_POST['partida'];
$proveedor = $_POST['proveedor'];
$proceso = $_POST['proceso'];
$pais = $_POST['pais'];
$regsan = $_POST['registrosan'];
$osopm = $_POST['osopm'];
$min = $_POST['min'];
$max = $_POST['max'];
$descripcion = $_POST['descripcion'];
$minofertada = $_POST['minofertada'];
$maxofertada = $_POST['maxofertada'];
$cumple1 = $_POST['cumple1'];
$cumple2 = $_POST['cumple2'];
$cumple3 = $_POST['cumple3'];
$cumple4 = $_POST['cumple4'];
$cumple5 = $_POST['cumple5'];
$cumple6 = $_POST['cumple6'];
$cumple7 = $_POST['cumple7'];
$cumple8 = $_POST['cumple8'];
$cumple9 = $_POST['cumple9'];
$cumple10 = $_POST['cumple10'];
$cumple11 = $_POST['cumple11'];
$cumple12 = $_POST['cumple12'];
$cumple13 = $_POST['cumple13'];
$cumple14 = $_POST['cumple14'];
$comentarios = $_POST['comentarios'];
$dictamen = $_POST['dictamen'];
$evaluador = $_POST['evaluador'];
$fechaven = $_POST['fechaven'];
$fechaexp = $_POST['fechaexp'];
$unidad = $_POST['unidad'];
$tipo = $_POST['tipo'];
$cant = $_POST['cant'];
$fechasolicitud3 = $_POST['fechasolicitud3'];
$fechaacuse4 = $_POST['fechaacuse4'];
$beneficios = $_POST['beneficios'];


$varc1 = "";
$varc2 = "";
$varc3 = "";
$varc4 = "";
$varc5 = "";
$varc6 = "";
$varc7 = "";
$varc10 = "";
$varc13 = "";
$varc14 = "";

$varvar = "";


if ($cumple1 == "No Cumple") {
  $varc1 = "1.- Formato de Propuesta Técnica.";
}
if ($cumple2 == "No Cumple") {
  $varc2 = "2.- Registro Sanitario.";
}
if ($cumple3 == "No Cumple") {
  $varc3 = "3.- Registro Sanitario.";
}
if ($cumple4 == "No Cumple") {
  $varc4 = "4.- Registro Sanitario.";
}
if ($cumple5 == "No Cumple") {
  $varc5 = "5.- Catalogo Folleto e Inserto.";
}
if ($cumple6 == "No Cumple") {
  $varc6 = "6.- Etiqueta de Producto Terminado.";
}
if ($cumple7 == "No Cumple") {
  $varc7 = "7.- Constancia de COFEPRIS sobre Registro Sanitario.";
}
if ($cumple10 == "No Cumple") {
  $varc10 = " 10.- Manifiesto de cumplimiento de normas.";
}
if ($cumple13 == "No Cumple") {
  $varc13 = "13.- Manifiesto de Pruebas.";
}
if ($cumple14 == "No Cumple") {
  $varc14 = " 14.- Tecnovigilancia.";
}

if (($cumple1 != "No Cumple") && ($cumple2 != "No Cumple") && ($cumple3 != "No Cumple")
  && ($cumple4 != "No Cumple") && ($cumple5 != "No Cumple") && ($cumple6 != "No Cumple")
  && ($cumple7 != "No Cumple") && ($cumple8 != "No Cumple") && ($cumple9 != "No Cumple")
  && ($cumple10 != "No Cumple") && ($cumple11 != "No Cumple") && ($cumple13 != "No Cumple") && ($cumple14 != "No Cumple")
) {
  $varvar = "No Aplican";
}

$causades = $varc1 . $varc2 . $varc3 . $varc4 . $varc5 . $varc6 . $varc7 . $varc10 . $varc13 . $varc14 . $varvar;

include_once('conexiondb.php');
$conn = new Conexion();
$link = $conn->conectarse();

$id = $_GET['id'];

$consulta = mysqli_query($link, "SELECT * FROM usuarios where id=$id");

while ($row = mysqli_fetch_row($consulta)) {
  $usertra = $row[0];
  $tipoo = $row[20];
  $nombre = $row[2];
  $APaterno = $row[4];
  $AMaterno = $row[5];
}


if (
  $cumple1 != "No Aplica" || $cumple2 != "No Aplica" || $cumple3 != "No Aplica" || $cumple4 != "No Aplica" || $cumple5 != "No Aplica" ||
  $cumple6 != "No Aplica" || $cumple7 != "No Aplica" || $cumple8 != "No Aplica" || $cumple9 != "No Aplica" || $cumple10 != "No Aplica" ||
  $cumple11 != "No Aplica" || $cumple12 != "No Aplica" || $cumple13 != "No Aplica" || $cumple14 != "No Aplica"
) {


  $query = "INSERT INTO `material_tecnica`(`descripcion`, `clave12`, 
`ospm`, `partida`, `proveedor`, `pais`, `minofertada`, `maxofertada`, 
`fechacreacion`, `registro_sanitario`, `tecnica_minima`, `tecnica_maxima`,
 `tecnica1`, `tecnica2`, `tecnica3`, `tecnica4`, `tecnica5`, `tecnica6`, `tecnica7`, 
 `tecnica8`, `tecnica9`, `tecnica10`, `tecnica11`, `tecnica12`, `tecnica13`, `tecnica14`, 
 `evaluador`, `dictamen`, `comentarios`, `fechaexp`, 
 `fechaven`, `tipo`, `cant`, `unidad`, `fechaacuse4`, `fechasolicitud3`, `causadesechamiento`,`proceso`,`beneficios`) 
 VALUES ('$descripcion','$clave',
 '$osopm','$partida','$proveedor','$pais','$minofertada','$maxofertada',
 CURRENT_TIMESTAMP,'$regsan','$min','$max',
 '$cumple1','$cumple2','$cumple3','$cumple4','$cumple5','$cumple6','$cumple7',
 '$cumple8','$cumple9','$cumple10','$cumple11','$cumple12','$cumple13','$cumple14',
 '$evaluador','$dictamen','$comentarios','$fechaexp',
 '$fechaven','$tipo','$cant','$unidad','$fechaacuse4','$fechasolicitud3','$causades','$proceso','$beneficios')";

  $alta = mysqli_query($link, $query);


?>
  <div style="text-align: right;width:1200px">
    <style type="text/css" media="print">
      .nover {
        display: none
      }
    </style>
    <SCRIPT LANGUAGE="JavaScript">
      if (window.print) {
        document.write('<form><input type="button" class="nover calendar" id="Imprimelo" value="Imprimir" onClick="javascript:window.print()"></form>');
      }
    </script>
    <div>

      <div>
        <a class="dropdown-item" href="eva-tec-mat-ch.php?id=<?php echo $id; ?>"> Nueva evaluación</a>
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
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
        </head>
        <br></br>

        <p style="float:left;margin-left:10px"><span class="text-uppercase page-subtitle">Evaluación Técnica</span></p>
        <p style="float:left;margin-left:10px">
          <h3 class="page-title">Material de Curación</h3>
        </p>
        <div class="row">
          <div class="col">
            <div class="card card-small mb-4">

              <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">


                  <tbody>

                    <tr>
                      <td> <?php echo "CLAVE:"; ?>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="clave" id="clave" class="form-control-lg mb-3" value="<?php echo $clave; ?>" readonly>
                        <?php echo "PARTIDA:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="partida" id="partida" class="form-control-lg mb-3" value="<?php echo $partida; ?>" readonly>
                        <?php echo "PROVEEDOR:"; ?>
                        <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 500px; height: 500px;" name="proveedor" id="proveedor" class="form-control-lg mb-3" value="<?php echo $proveedor; ?>" readonly>
                    </tr>
                    <tr>
                      <td> <?php echo "UNIDAD:"; ?>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="unidad" id="unidad" class="form-control-lg mb-3" value="<?php echo $unidad; ?>" readonly>
                        <?php echo "TIPO:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="tipo" id="tipo" class="form-control-lg mb-3" value="<?php echo $tipo; ?>" readonly>
                        <?php echo "CANTIDAD:"; ?>
                        <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 350px; height: 50px;" name="cant" id="cant" class="form-control-lg mb-3" value="<?php echo $cant; ?>" readonly>
                    </tr>

                    <tr>
                      <td> <?php echo "PAIS DE ORIGEN:"; ?>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="pais" id="pais" class="form-control-lg mb-3" value="<?php echo $pais; ?>" readonly>
                        <?php echo "OSD o PMR:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="osopm" id="osopm" class="form-control-lg mb-3" value="<?php echo $osopm; ?>" readonly>
                        <?php echo "REGISTRO SANITARIO:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="regsan" id="regsan" class="form-control-lg mb-3" value="<?php echo $regsan; ?>" readonly>
                        <br><?php echo "FECHA DE EXPEDICION:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechaexp" id="fechaexp" class="form-control-lg mb-3" value="<?php echo $fechaexp; ?>" readonly>
                        <?php echo "FECHA DE VENCIMIENTO:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechaven" id="fechaven" class="form-control-lg mb-3" value="<?php echo $fechaven; ?>" readonly>


                    </tr>


                    <tr>
                      <td> <?php echo "Cantidad Max. Solicitada:"; ?>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="max" id="max" class="form-control-lg mb-3" value="<?php echo $max; ?>" readonly>
                        <?php echo "Cantidad Min. Solicitada:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="min" id="min" class="form-control-lg mb-3" value="<?php echo $min; ?>" readonly>

                    </tr>




                    <tr>
                      <td> <?php echo "Cantidad Max. Ofertada:"; ?>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="maxofertada" id="maxofertada" class="form-control-lg mb-3" value="<?php echo $maxofertada; ?>" readonly>
                        <?php echo "Cantidad Min. Ofertada:"; ?>
                        <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="minofertada" id="minofertada" class="form-control-lg mb-3" value="<?php echo $minofertada; ?>" readonly>

                    </tr>

                    <tr>
                      <td> <?php echo "DESCRIPCION:"; ?></td>
                      <td> <input id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" maxlength="500" aria-invalid="false" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;" type="text" readonly></td>
                      
                    </tr>
                    <tr>
                      <td> <?php echo "BENEFICIOS:"; ?></td>
                      <td> <input id="beneficios" name="beneficios" value="<?php echo $beneficios; ?>" maxlength="500" aria-invalid="false" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;" type="text" readonly></td>
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

                      <td> <?php echo "1. FORMATO DE PROPUESTA TÉCNICA. Relación detallada únicamente de las partidas que oferte, donde indique el número de partida, clave a 10 dígitos, denominación genérica, número de registro sanitario (cuando aplique), descripción, presentación, cantidades mínimas y máximas solicitadas, cantidad mínima y máxima ofertada, marca o denominación distintiva, fabricante y país de origen. "; ?></td>

                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple1" id="cumple1" class="form-control-lg mb-3" value="<?php echo $cumple1; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "2. Copia legible del “REGISTRO SANITARIO” (anverso y reverso) vigente, o en su  caso modificación o prorróga que corresponderá  con la descripción y autorización para la partida ofertada."; ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple2" id="cumple2" class="form-control-lg mb-3" value="<?php echo $cumple2; ?>" readonly></td>

                    </tr>

                  <tbody>

                    <tr>
                      <td> <?php echo "3. Copia legible del formato de solicitud de Prórroga del Registro Sanitario, siempre y cuando haya sido presentada con cuando menos 150 días naturales de anticipación al vencimiento, indicando número de entrada del trámite, nombre del producto y número(s) de catálogo para las partidas contenidas en el Apéndice 1 DEMANDA AGREGADA del presente Anexo 1 Anexo Técnico. Verificar que la prórroga que presenta corresponda con la descripción del bien ofertado."; ?></td>

                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple3" id="cumple3" class="form-control-lg mb-3" value="<?php echo $cumple3; ?>" readonly></td>
                      <td> FECHA DE SOLICITUD DE PRORROGA:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechasolicitud3" id="fechasolicitud3" class="form-control-lg mb-3" value="<?php echo $fechasolicitud3; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "4. Acuse de recibido del trámite de SOLICITUD DE PRÓRROGA sometido ante COFEPRIS." ?></td>

                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple4" id="cumple4" class="form-control-lg mb-3" value="<?php echo $cumple4; ?>" readonly></td>
                      <td> FECHA DE ACUSE:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="fechaacuse4" id="fechaacuse4" class="form-control-lg mb-3" value="<?php echo $fechaacuse4; ?>" readonly></td>
                    </tr>

                  <tbody>

                    <tr>

                      <td> <?php echo "5.CATÁLOGOS, FOLLETOS E INSERTOS.   En el caso de que la descripción del bien ofertado no se encuentre completamente detallada en el Registro Sanitario, el LICITANTE deberá integrar como parte de su propuesta técnica: Las etiquetas, catálogos, folletos e insertos." ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple5" id="cumple5" class="form-control-lg mb-3" value="<?php echo $cumple5; ?>" readonly></td>

                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "6. En caso de que los Bienes ofertados no requieran Registro Sanitario, se deberá presentar: Etiqueta del producto terminado para su comercialización, que acredite el cumplimiento de la descripción del bien indicada en el Apéndice 1 DEMANDA AGREGADA del presente Anexo 1 Anexo Técnico en idioma español, identificando o referenciando la clave del bien ofertado a 10 dígitos; la etiqueta se define como el marbete, rótulo, marca e imagen gráfica, que se haya escrito, impreso, estarcido, marcado, marcado en relieve o en hueco, grabado, adherido o precintado en cualquier material susceptible de contener el insumo, incluyendo el envase mismo; que permita acreditar claramente las especificaciones y características de los Bienes ofertados, documental que deberá exhibirse" ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple6" id="cumple6" class="form-control-lg mb-3" value="<?php echo $cumple6; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>

                      <td> <?php echo "7. Constancia emitida por la COFEPRIS en la que se manifieste que el bien ofertado no requiere de Registro Sanitario, en la que indique de manera expresa la clave y/o descripción del mismo, así como copia del “ACUERDO por el que se da a conocer el listado de insumos para la salud considerados como de bajo riesgo para efectos de obtención del Registro Sanitario, y de aquellos productos que por su naturaleza, características propias y uso no se consideran como insumos para la salud y por ende no requieren Registro Sanitario”, publicado en el Diario Oficial de la Federación el 22 de diciembre del 2014." ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple7" id="cumple7" class="form-control-lg mb-3" value="<?php echo $cumple7; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "8. CERTIFICACIONES FDA Y CEE 
Para los equipos que se soliciten en demostración permanente, deberán presentar aparte de los instructivos y folletos en español, los certificados de la FDA y/o de la CEE.
" ?></td>

                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple8" id="cumple8" class="form-control-lg mb-3" value="<?php echo $cumple8; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "9. Copia simple del aviso de funcionamiento." ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple9" id="cumple9" class="form-control-lg mb-3" value="<?php echo $cumple9; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "10. MANIFIESTO DE CUMPLIMIENTO DE NORMAS suscrito por el Titular del Registro Sanitario y/o su representante legal en México que los bienes terapéuticos ofertados cumplen con lo establecido en la Ley General de Salud, en los artículos aplicables, en las Normas Oficiales Mexicanas, Normas Mexicanas, Normas Internacionales (señalar cuáles) y a falta de éstas, de acuerdo a las especificaciones técnicas del fabricante, de conformidad con lo dispuesto en los artículos 53 y 55 de la Ley Federal de sobre Metrología y Normalización; o especificaciones técnicas que se señalan en el artículo 67 de la Ley mencionada o bien, deberán cumplir con las características y especificaciones requeridas en el presente Anexo Técnico, por la(s) clave(s) en la(s) que participe. Este manifiesto deberá ser firmado por el representante legal del LICITANTE  y entregar en hoja preferentemente membretada del fabricante." ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple10" id="cumple10" class="form-control-lg mb-3" value="<?php echo $cumple10; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "11.     Carta compromiso en la cual se obliguen a canjear los Bienes Terapéuticos (Material de Curación, Laboratorio, Radiológico, Osteosíntesis y Endoprótesis) que no sean consumidos dentro de su vida útil, dentro de 15 días hábiles posteriores a la notificación oficial de las ÁREAS REQUIRENTES sin costo alguno para estas últimas." ?></td>

                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple11" id="cumple11" class="form-control-lg mb-3" value="<?php echo $cumple11; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "12. Carta compromiso de garantía contra vicios ocultos y de mala calidad de los Bienes Terapéuticos (Material de Curación, Laboratorio, Radiológico, Osteosíntesis y Endoprótesis) entregados." ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple12" id="cumple12" class="form-control-lg mb-3" value="<?php echo $cumple12; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "13. Escrito en el que manifieste: “que de resultar adjudicado se comprometerá a realizar, cuando así se considere necesario y a solicitud de las ÁREAS REQUIRENTES, en un plazo no mayor a cinco días hábiles posteriores a la notificación de la solicitud, las pruebas que acrediten la correspondencia de los resultados con las especificaciones, calidad del insumo y valores indicados en la Farmacopea de los Estados Unidos Mexicanos, elaborados por un laboratorio de pruebas “Tercero Autorizado” por la COFEPRIS, obligándose a hacer entrega del resultado de las mismas en un plazo no mayor a dos días hábiles posterior a su emisión”, sin costo alguno para las ÁREAS REQUIRENTES. Con lo que se dará cumplimiento al numeral 2 del presente Anexo 1 Anexo Técnico." ?></td>

                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple13" id="cumple13" class="form-control-lg mb-3" value="<?php echo $cumple13; ?>" readonly></td>
                    </tr>
                  <tbody>

                    <tr>
                      <td> <?php echo "14. TECNOVIGILANCIA. El LICITANTE deberá entregar el documento vigente expedido por la COFEPRIS en la que esté debidamente registrado que cumple con lo establecido en la NOM-240-SSA1-2012, Instalación y operación de la Tecnovigilancia, en la que se indica el nombre del responsable de la Tecnovigilancia, lo anterior con la finalidad de garantizar la seguridad del paciente." ?></td>
                      <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple14" id="cumple14" class="form-control-lg mb-3" value="<?php echo $cumple14; ?>" readonly></td>
                    </tr>
                  <tbody>

                    </tr>



                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <p style="float:left;margin-left:10px"><br>CAUSA DE DESECHAMIENTO:<textarea style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="desechamiento" id="desechamiento" class="form-control-lg mb-3" value="<?php echo $varvar.$varc1 . "\n" . $varc2 . "\n" . $varc3 . "\n" . $varc4 . "\n" . $varc5 . "\n" . $varc6 . "\n" . $varc7 . "\n" . $varc10 . "\n" . $varc13 . "\n" . $varc14; ?>" readonly></textarea></p>

        <p style="float:left;margin-left:10px"><br>EVALUADOR:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="evaluador" id="evaluador" class="form-control-lg mb-3" value="<?php echo $evaluador; ?>" readonly></p>
        <p style="float:left;margin-left:10px"> <br> DICTAMEN FINAL: <input style="background-color:#dddddd;margin-right:170px; width: 600px; height: 50px;" name="dictamen" id="dictamen" class="form-control-lg mb-3" value="<?php echo $dictamen; ?>" readonly></p>
        <p style="float:left;margin-left:10px"><br> COMENTARIOS: <input style="background-color:#dddddd; margin-right:390px; width: 620px; height: 128px;" name="comentarios" id="comentarios" class="form-control-lg mb-3" value="<?php echo $comentarios; ?>" readonly></p>
        <p style="float:left;margin-left:10px"><br> FIRMA DEL EVALUADOR: <input style="width: 550px; height: 60px;" name="firma" id="firma" class="form-control-lg mb-3" readonly></p>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
        <script src="scripts/extras.1.1.0.min.js"></script>
        <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>
        <script type="text/javascript"> </script>


      <?php
    } else {
      echo "ERROR: NO SE PUEDE GUARDAR DEBIDO A QUE NO HAZ REALIZADO LA EVALUACION";
      ?>
        <br></br>
        <?php
        echo "REGRESA Y REALIZALA DE NUEVO";
        ?>

        <div>
          <br><button class="btn btn-sm btn-accent ml-auto" onClick="window.location.href='<?= $_SERVER["HTTP_REFERER"] ?>'"><i class="material-icons"></i>Regresar</button>
        <?php
      }

        ?>