<?php include_once('error.php');?>
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

<body class="h-100">
  <?php
include_once('conexiondb.php');
$conn= new Conexion();
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


     $consultavalores= mysqli_query($link, "SELECT * FROM procesos_medicamentos as pm
     WHERE pm.clave_med = $clave12");

      $consultavalores1= mysqli_query($link, "SELECT * FROM catalogo_medicamentos as cm 
      WHERE cm.clave = $clave12");

    while ($row1 = mysqli_fetch_row($consultavalores)) {
      $proceso02=$row1[2];
      $partida=$row1[5];
      $osopm=$row1[11];
      $min=$row1[6];
      $max=$row1[7];
      $caracteristicas=$row1[13];
     }

     while ($row2 = mysqli_fetch_row($consultavalores1)) {
      
      //$regsan=$row2['registrosan'];
      $descripcion=$row2[2];
      $unidad=$row2[3];
      $cantidad=$row2[4];
      $tipo=$row2[5];
      
     }

     $consultavalores2= mysqli_query($link, "SELECT * FROM catalogo_procesos as cp
     WHERE cp.id_cat_procesos ='$proceso02'");
 
     while ($row10 = mysqli_fetch_row($consultavalores2)) {
       $proceso00=$row10[1];
       $proceso01=$row10[2];

     }

      $proceso=$proceso00." || ".$proceso01;
    

  ?>



  <div class="container-fluid">
    <div class="row">
      <main class="main-content col-lg-12 col-md-9 col-sm-12 p-0 offset-lg-0 offset-md-3">
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Medicamentos</span>
              <h3 class="page-title">Nueva Evaluación Técnica</h3>
              <?php if ($tipoo == "Administrador") {
              ?>
                <a href="index.php?id=<?php echo $id; ?>">Regresar</a>

              <?php } else if ($tipoo == "Tecnico") {
              ?>
                <a href="indextecnico.php?id=<?php echo $id; ?>">Regresar</a>
              <?php        }
              ?>

            </div>
          </div>
          <!-- End Page Header -->
          <div class="row">
            <div class="col-lg-9 col-md-12">
              <!-- Add New Post Form -->
              <div class="card card-small mb-3">
                <div class="card-body">

                  <br><br>

                  <form class="add-new-post" method="post" action="guardado-tec-med.php?id=<?php echo $id; ?>">
                    <div>
                      CLAVE: <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="clave12" class="form-control-lg mb-3" name="clave12" type="text" value="<?php echo $clave12; ?>" readonly>
                      </select>
                      <br>
                      <?php
                      include('mostrar-proveedores.php');
                      ?>
                      PROVEEDOR:<input size=50 class="mi-selector form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="proveedor" value="<?php echo $proveedor; ?>" required readonly>


                    </div>

                    <div>
                      
                      <?php
                      include('mostrar-procesos.php');
                      ?>
                      PROCESO:<input size=50 class="mi-selector form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="proceso" value="<?php echo $proceso; ?>" required readonly>


                    
                    <!--style="height:200px;width:980px;-->
                    <div>
                      
                      <!--copiar esta parte nadamas y ya corre en los demas-->
                      <hr>
                      <span class="text-uppercase page-subtitle">PRESENTACION</span>
                      <br> Unidad: <input style="padding:12px;background-color:#dddddd;line-height:1.4; margin-left:10px;margin-right:10px" id="unidad" name="unidad" class="form-control-lg mb-3" type="text" value="<?php echo $unidad ?>" readonly placeholder="Unidad">
                      Cantidad:
                      <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cantidad" id="cantidad" class="form-control-lg mb-3" readonly placeholder="Cantidad" value="<?php echo $cantidad ?>">
                      Tipo:
                      <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="tipo" class="form-control-lg mb-3" name="tipo" type="text" placeholder="Tipo" value="<?php echo $tipo ?>" readonly>

                      <hr>

                      <br> OSDoPMR:<input style="padding:12px;background-color:#dddddd;line-height:1.4; margin-left:10px;margin-right:10px" id="osopm" name="osopm" class="form-control-lg mb-3" type="text" readonly placeholder="OSDoPMR" value="<?php echo $osopm ?>">
                      Partida:
                      <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="partida" id="partida" class="form-control-lg mb-3"  placeholder="Partida" value="<?php echo $partida ?>">
                      Clasificacion Administrativa: <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="caracteristicas" class="form-control-lg mb-3" name="caracteristicas" type="text" value="<?php echo $caracteristicas; ?>" readonly>

                      <br>Cantidad Min. Solicitada:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="min" name="min" class="form-control-lg mb-3" type="text" placeholder="Minima Solicitada" value="<?php echo $min ?>" > 
                      Cantidad Max. Solicitada:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" class="form-control-lg mb-3" name="max" id="max" type="text" placeholder="Maxima Solicitada" value="<?php echo $max ?>" >
                      
                      <!--<br> Caracteristicas:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" class="form-control-lg mb-3" name="max" id="max" type="text" placeholder="Maxima Solicitada" value="<?php echo $max ?>" readonly>
                      Controlado:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="min" name="min" class="form-control-lg mb-3" type="text" placeholder="Minima Solicitada" value="<?php echo $min ?>" readonly>
                      Red Frio:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="min" name="min" class="form-control-lg mb-3" type="text" placeholder="Minima Solicitada" value="<?php echo $min ?>" readonly>
              --><br> DESCRIPCION: <textarea id="descripcion" name="descripcion" maxlength="100" aria-invalid="false" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 670px; height: 128px;" type="text" readonly> <?php echo $descripcion ?></textarea>
                    </div>

                    </div>
                    <hr>
                    <CENTER> <span class="text-uppercase page-subtitle">VIGENCIA</span></center>
                    <span class="text-uppercase page-subtitle">** Llenado Obliagtorio</span>
                    <br>
                      <?php
                      include('mostrar-paises.php');
                      ?>
                      <select class="mi-selector form-control-lg mb-3" style="margin-left:5px;margin-right:5px" name="pais" required>
                        <option>Pais de Origen</option>
                        <?php
                        while ($row = mysqli_fetch_row($mostrar)) {
                        ?>
                          <option value="<?php echo "$row[1]"; ?>"><?php echo "$row[1]"; ?></option>
                        <?php } ?>
                      </select>
                    <br> <input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" type="text" name="registrosan" placeholder="Registro Sanitario">

                    FECHA DE EXPEDICION:<input type="date" name="fechaexp">
                    FECHA DE VENCIMIENTO:<input type="date" name="fechaven">
                    <br>Cantidad Min. Ofertada:<input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" name="minofertada" type="number" placeholder="**Minima Ofertada" required>
                    Cantidad Max. ofertada:<input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" type="number" name="maxofertada" placeholder="**Maxima Ofertada" required>


                    <!--style="display:none"-->







                    <h3 class="page-title"></h3>


                    <div class="row">
                      <div class="col">
                        <div class="card card-small mb-4">
                          <!--<div class="card-header border-bottom">
                    <h6 class="m-0">247 resultados encontrados</h6>
                  </div>-->
                          <div class="card-body p-0 pb-3 text-center">
                          <CENTER> <span class="text-uppercase page-subtitle">son obligatorios</span></center>
                            <table class="table mb-0">
                              <thead class="bg-light">
                                <tr>
                                  <th scope="col" class="border-0">DOCUMENTACIÓN TECNICA</th>
                                  <th scope="col" class="border-0">CUMPLE</th>
                                  <th scope="col" class="border-0">NO CUMPLE</th>
                                  <th scope="col" class="border-0">NO APLICA</th>
                                  <th scope="col" class="border-0">OTROS</th>

                                </tr>
                              </thead>

                              <tbody>

                                <tr>

                                  <td> <?php echo "1. FORMATO DE PROPUESTA TÉCNICA. Relación detallada únicamente de las partidas que oferte, donde indique el número de partida, clave a 12 dígitos, denominación genérica, descripción, presentación, cantidad solicitada, cantidad ofertada, marca o denominación distintiva, fabricante, registro sanitario y país de origen; y para el caso de ISSSTE y PEMEX incluir código de barras.
(**OBLIGATORIO)"; ?></td>
                                  <td> <input type="radio" name="cumple1" value="Cumple" onclick="mostrar1(1)"></td>
                                  <td> <input type="radio" name="cumple1" value="No Cumple" onclick="mostrar1(0)"></td>
                                  <td> <input type="radio" name="cumple1" value="No Aplica" checked onclick="mostrar1(3)"></td>

                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "2.Por cada partida que oferte, deberá anexar copia legible del “REGISTRO SANITARIO” (anverso y reverso) vigente, MODIFICACIÓN o su tramite con el anexo correspondiente que contenga la descripción y autorización para cada una de las partidas. En su caso, FORMATO DE SOLICITUD DE PRÓRROGA del Registro Sanitario, siempre y cuando haya sido presentada con cuando menos 150 días naturales de anticipación al  vencimiento, indicando número  de  entrada  del  trámite,  y nombre del producto. Así como acuse de recibido del trámite sometido ante COFEPRIS.
 (**OBLIGATORIO)"; ?></td>
                                  <td> <input type="radio" name="cumple2" value="Cumple" onclick="mostrar2(1)"></td>
                                  <td> <input type="radio" name="cumple2" value="No Cumple" onclick="mostrar2(0)"></td>
                                  <td> <input type="radio" name="cumple2" value="No Aplica" checked onclick="mostrar2(3)"></td>
                                  <td>FECHA DE SOLICITUD DE PRORROGA:<input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" type="date" name="fechasolicitud3"></input></td>
                                  <td>FECHA DE ACUSE:<input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" type="date" name="fechaacuse4"></input></td>
                                </tr>

                              <tbody>

                                <tr>
                                  <td> <?php echo "3. Datos generales y notificaciones oficiciales de los proveedores
                                  En su propuesta técnica deberán proporcionar el contacto designado para atender cualquier asunto correspondiente a la calidad de los insumos contratados, debiendo incluir los siguientes datos: • Nombre completo del contacto oficial. • Cargo. • Domicilio. • Teléfono de oficina, número de extensión y número celular. • Correo electrónico. "; ?></td>
                                  <td> <input type="radio" name="cumple3" value="Cumple" onclick="mostrar3(1)"></td>
                                  <td> <input type="radio" name="cumple3" value="No Cumple" onclick="mostrar3(0)"></td>
                                  <td> <input type="radio" name="cumple3" value="No Aplica" checked onclick="mostrar3(3)"></td>
                                  

                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "4. Indicación para Prescribir Reducida (IPP-R) y proyecto de marbete. En el caso de que la descripción del bien ofertado no se encuentre completamente detallada en el Registro Sanitario, el LICITANTE deberá integrar como parte de su propuesta técnica la Información para Prescribir Reducida (IPP-R) y/o proyecto de marbete. (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple4" value="Cumple" onclick="mostrar4(1)"></td>
                                  <td> <input type="radio" name="cumple4" value="No Cumple" onclick="mostrar4(0)"></td>
                                  <td> <input type="radio" name="cumple4" value="No Aplica" checked onclick="mostrar4(3)"></td>
                                  

                                </tr>

                              <tbody>

                                <tr>

                                  <td> <?php echo "5. CARTA DE GARANTIA DE ABASTECIMIENTO (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple5" value="Cumple" onclick="mostrar5(1)"></td>
                                  <td> <input type="radio" name="cumple5" value="No Cumple" onclick="mostrar5(0)"></td>
                                  <td> <input type="radio" name="cumple5" value="No Aplica" checked onclick="mostrar5(3)"></td>


                                </tr>
                             <!-- <tbody>

                                <tr>
                                  <td> <?php echo "6.CARTA DE GARANTIA DE ABASTECIMIENTO (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple6" value="Cumple" onclick="mostrar6(1)"></td>
                                  <td> <input type="radio" name="cumple6" value="No Cumple" onclick="mostrar6(0)"></td>
                                  <td> <input type="radio" name="cumple6" value="No Aplica" checked onclick="mostrar6(3)"></td>


                                </tr>-->
                              <tbody>

                                <tr>

                                  <td> <?php echo "6.  Copia de la Licencia Sanitaria (vigente y Legible) Aplicable para los medicamentos a que se refieren a los grupos  I al VI, de la clasificación para su venta y comercialización, del artículo 226 de la Ley General de Salud, a nombre del LICITANTE.
                                  En caso de modificación, presentar copia legible de la Licencia Sanitaria y copia de la modificación autorizada por la COFEPRIS. (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple6" value="Cumple" onclick="mostrar6(1)"></td>
                                  <td> <input type="radio" name="cumple6" value="No Cumple" onclick="mostrar6(0)"></td>
                                  <td> <input type="radio" name="cumple6" value="No Aplica" checked onclick="mostrar6(3)"></td>



                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "7. 	Copia del Aviso del Responsable Sanitario y/o aviso de funcionamiento con la clave SCIAN presentado ante COFEPRIS, con sellos legibles, así como el número de ingreso del trámite en comento. (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple7" value="Cumple" onclick="mostrar7(1)"></td>
                                  <td> <input type="radio" name="cumple7" value="No Cumple" onclick="mostrar7(0)"></td>
                                  <td> <input type="radio" name="cumple7" value="No Aplica" checked onclick="mostrar7(3)"></td>


                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "8. 	MANIFIESTO DE CUMPLIMIENTO DE NORMAS, en hoja membretada suscrito por el Titular del Registro Sanitario o su representante legal en México, de que los medicamentos ofertados cumplen con lo establecido en la Ley General de Salud, en los artículos aplicables, en las Normas Oficiales Mexicanas, Normas Mexicanas, Normas Internacionales, señalando cuales le resultan aplicables y a falta de éstas, de acuerdo a las especificaciones técnicas del fabricante, de conformidad con lo dispuesto en los artículos 53 y 55 de la Ley Federal sobre Metrología y Normalización; o bien, deberán cumplir con las características y especificaciones requeridas en el presente Anexo Técnico, por la(s) clave(s) en la(s) que participe. (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple8" value="Cumple" onclick="mostrar8(1)"></td>
                                  <td> <input type="radio" name="cumple8" value="No Cumple" onclick="mostrar8(0)"></td>
                                  <td> <input type="radio" name="cumple8" value="No Aplica" checked onclick="mostrar8(3)"></td>



                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "9. 	Carta compromiso en la cual se obliguen a canjear los medicamentos no sean consumidos dentro de su vida útil, dentro de un plazo de 15 días hábiles posteriores a la solicitud formal por parte de las ÁREAS REQUIRENTES, sin costo alguno para estas últimas. (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple9" value="Cumple" onclick="mostrar9(1)"></td>
                                  <td> <input type="radio" name="cumple9" value="No Cumple" onclick="mostrar9(0)"></td>
                                  <td> <input type="radio" name="cumple9" value="No Aplica" checked onclick="mostrar9(3)"></td>


                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "10. 	Carta   compromiso   de   garantía   contra   vicios   ocultos   y   de   mala   calidad   de   los medicamentos entregados (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple10" value="Cumple" onclick="mostrar10(1)"></td>
                                  <td> <input type="radio" name="cumple10" value="No Cumple" onclick="mostrar10(0)"></td>
                                  <td> <input type="radio" name="cumple10" value="No Aplica" checked onclick="mostrar10(3)"></td>



                                </tr>
                              <tbody>

                                <tr>
                                  <td> <?php echo "11. 	Escrito en el que manifieste: “que de resultar adjudicado se comprometerá a realizar, cuando así se considere necesario y a solicitud de las ÁREAS REQUIRENTES, en un plazo no mayor a cinco días hábiles posteriores a la notificación de la solicitud, las pruebas que acrediten la correspondencia de los resultados con las especificaciones, calidad del insumo y valores indicados en la Farmacopea de los Estados Unidos Mexicanos, elaborados por un laboratorio de pruebas “Tercero Autorizado” por la COFEPRIS, obligándose a hacer entrega del resultado de las mismas en un plazo no mayor a dos días hábiles posterior a su emisión”, sin costo alguno para las ÁREAS REQUIRENTES. Con lo que se dará cumplimiento al numeral 2 del presente Anexo Técnico.  (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple11" value="Cumple" onclick="mostrar11(1)"></td>
                                  <td> <input type="radio" name="cumple11" value="No Cumple" onclick="mostrar11(0)"></td>
                                  <td> <input type="radio" name="cumple11" value="No Aplica" checked onclick="mostrar11(3)"></td>


                                </tr>
                              
            
                                <td> <?php echo "12.	De ser el caso, copia legible de los documentos con los que se acredite que en el mercado es el único posible oferente, o se trata de una persona que posee la titularidad o el licenciamiento exclusivo de patentes, derechos de autor, u otros derechos exclusivos, como son los registros, acuerdos comerciales, autorizaciones, designaciones, contratos de licenciamiento, posesión emitidos por o registrados ante las autoridades nacionales competentes o en su caso a las disposiciones (documento apostillado), así como  los que se determinen en el alcance o implicaciones jurídicas o de los derechos mencionados.  (**OBLIGATORIO)" ?></td>
                                  <td> <input type="radio" name="cumple15" value="Cumple" onclick="mostrar15(1)"></td>
                                  <td> <input type="radio" name="cumple15" value="No Cumple" onclick="mostrar15(0)"></td>
                                  <td> <input type="radio" name="cumple15" value="No Aplica" checked onclick="mostrar15(3)"></td>


                                </tr>

                              </tbody>
                                
                            </table>

                          </div>

                          <?php

                          ?>
                          Nombre del Evaluador:<input class="form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:10px" type="text" name="evaluador" value="<?php echo $nombre . " ";
                                                                                                                                                                                                        echo $APaterno . " ";
                                                                                                                                                                                                        echo $AMaterno; ?>" readonly required>
                          Dictamen Final:
                          <input id="dictamen" class="form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:10px" type="text" name="dictamen" readonly>
                          <!--<input id="dictamen1" class="form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:10px"  type="text" name="dictamen1" required>-->
                          <!--  <select class="form-control-lg mb-3" name="dictamen" style="margin-left:10px;margin-right:10px" requiered>
                      <option>Dictamen Final</option>
                      <option>CUMPLE</option>
                      <option>NO CUMPLE</option>
                      
                      </select>-->
                      Beneficios: <input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" type="text" name="beneficios" placeholder="Beneficios">
                          Comentarios: <input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px" type="text" name="comentarios" placeholder="Comentarios">

                          <button class="btn btn-sm btn-accent ml-auto">
                            <i class="material-icons">file_copy</i> Guardar</button>

                  </form>

                </div>
              </div>
              <!-- / Add New Post Form -->
            </div>

          </div>
        </div>
    </div>
    </main>
  </div>
  </div>



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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript">
  
    var dic1 = 3;
    var dic2 = 3;
    var dic3 = 3;
    var dic4 = 3;
    var dic5 = 3;
    var dic6 = 3;
    var dic7 = 3;
    var dic8 = 3;
    var dic9 = 3;
    var dic10 = 3;
    var dic11 = 3;
    var dic12 = 3;
    /*var dic13 = 3;
    var dic14 = 3;
    var dic15 = 3;*/


    function mostrar1(num) {
      if (num == 1) {
        dic1 = 1;
      } else if (num == 0) {
        dic1 = 0;
      } else {
        dic1 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar2(num) {
      if (num == 1) {
        dic2 = 1;
      } else if (num == 0) {
        dic2 = 0;
      } else {
        dic2 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar3(num) {
      if (num == 1) {
        dic3 = 1;
      } else if (num == 0) {
        dic3 = 0;
      } else {
        dic3 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }


    function mostrar4(num) {
      if (num == 1) {
        dic4 = 1;
      } else if (num == 0) {
        dic4 = 0;
      } else {
        dic4 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar5(num) {
      if (num == 1) {
        dic5 = 1;
      } else if (num == 0) {
        dic5 = 0;
      } else {
        dic5 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar6(num) {
      if (num == 1) {
        dic6 = 1;
      } else if (num == 0) {
        dic6 = 0;
      } else {
        dic6 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar7(num) {
      if (num == 1) {
        dic7 = 1;
      } else if (num == 0) {
        dic7 = 0;
      } else {
        dic7 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar8(num) {
      if (num == 1) {
        dic8 = 1;
      } else if (num == 0) {
        dic8 = 0;
      } else {
        dic8 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar9(num) {
      if (num == 1) {
        dic9 = 1;
      } else if (num == 0) {
        dic9 = 0;
      } else {
        dic9 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar10(num) {
      if (num == 1) {
        dic10 = 1;
      } else if (num == 0) {
        dic10 = 0;
      } else {
        dic10 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar11(num) {
      if (num == 1) {
        dic11 = 1;
      } else if (num == 0) {
        dic11 = 0;
      } else {
        dic11 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

    function mostrar12(num) {
      if (num == 1) {
        dic12 = 1;
      } else if (num == 0) {
        dic12 = 0;
      } else {
        dic12 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) /*|| (dic13 == 0) || (dic14 == 0) || (dic15 == 0)*/) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) /*&& (dic13 == 3) && (dic14 == 3) && (dic15 == 3)*/) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";
      }
    }

   /* function mostrar13(num) {
      if (num == 1) {
        dic13 = 1;
      } else if (num == 0) {
        dic13 = 0;
      } else {
        dic13 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) || (dic13 == 0) || (dic14 == 0) || (dic15 == 0)) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) && (dic13 == 3) && (dic14 == 3) && (dic15 == 3)) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";

      }
    }

    function mostrar14(num) {
      if (num == 1) {
        dic14 = 1;
      } else if (num == 0) {
        dic14 = 0;
      } else {
        dic14 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) || (dic13 == 0) || (dic14 == 0) || (dic15 == 0)) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) && (dic13 == 3) && (dic14 == 3) && (dic15 == 3)) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";

      }

    }
    function mostrar15(num) {
      if (num == 1) {
        dic15 = 1;
      } else if (num == 0) {
        dic15 = 0;
      } else {
        dic15 = 3;
      }
      if ((dic1 == 0) || (dic2 == 0) || (dic3 == 0) || (dic4 == 0) || (dic5 == 0) || (dic6 == 0) || (dic7 == 0) || (dic8 == 0) || (dic9 == 0) ||
        (dic10 == 0) || (dic11 == 0) || (dic12 == 0) || (dic13 == 0) || (dic14 == 0) || (dic15 == 0)) {
        document.getElementById('dictamen').value = "No Cumple";
      } else if ((dic1 == 3) && (dic2 == 3) && (dic3 == 3) && (dic4 == 3) && (dic5 == 3) && (dic6 == 3) && (dic7 == 3) && (dic8 == 3) && (dic9 == 3) &&
        (dic10 == 3) && (dic11 == 3) && (dic12 == 3) && (dic13 == 3) && (dic14 == 3) && (dic15 == 3)) {
        document.getElementById('dictamen').value = " ";
      } else {
        document.getElementById('dictamen').value = "Cumple";

      }

    }*/
    jQuery(document).ready(function($) {
                      $(document).ready(function() {
                        $('.mi-selector').select2();
                      });
                    }); {
                      document.getElementById('clave12').value = document.getElementById('partida2').value;;
                    }
    

    function myFunction() {
      if ("No Cumple" == "No Cumple") {
        document.getElementById('dictamen').value = "hola";

        document.write("No cumple");
      } else {
        document.getElementById('dictamen').value = "hola";
      }
    }


    function myFunction() {
      alert("Guardado");
      location.href = "index.php?id=<?php echo $id; ?>";
    }
    
  </script>
  
</body>

</html>