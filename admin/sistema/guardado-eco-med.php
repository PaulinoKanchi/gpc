<?php include_once('error.php');?>
<?php
$partida=$_POST['partida'];
$proveedor=$_POST['proveedor'];
$pais=$_POST['pais'];
$proceso=$_POST['proceso'];
$osopm=$_POST['osopm'];
$clave12=$_POST['clave123'];
$cantidadmin=$_POST['min'];
$cantidadmax=$_POST['max'];
$descripcion=$_POST['descripcion'];
$minofertada=$_POST['minofertada'];
$maxofertada=$_POST['maxofertada'];
$precio=$_POST['precio'];
$cumple1=$_POST['cumple1'];
$comentarios=$_POST['comentarios'];
$dictamen=$_POST['dictamen'];
$evaluador=$_POST['evaluador'];
$descuento=$_POST['descuento'];
$porcentajeabasto=$_POST['porcentajeabasto'];

$beneficios=$_POST['beneficios'];
$precio1=$_POST['precio1'];

$unidad=$_POST['unidad'];
$tipo=$_POST['tipo'];
$cant=$_POST['cantidad'];

$id=$_GET['id'];

$varc1="";


include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();         

if($cumple1=="No Cumple"){
$varc1="1.- Formato de Propuesta Económica.";
}else{
  $varc1="No aplica";
}


if($cumple1!="No Aplica"){

$query= "INSERT INTO `medicamentos_economica`(`descripcion`,`clave12`,`ospm`,`partida`,`proveedor`,`pais`,
`tecnica_minima`,`tecnica_maxima`,`minofertada`,`maxofertada`,`tecnica1`,`fechacreacion`,`evaluador`,`dictamen`,`comentarios`,`precio`,
`unidad`,`tipo`,`cant`,`causadesechamiento`,`proceso`,`pmr`,`beneficios`,`descuento`) VALUES ('$descripcion','$clave12','$osopm','$partida','$proveedor','$pais',
$cantidadmin,$cantidadmax,$minofertada,$maxofertada,'$cumple1', CURRENT_TIMESTAMP,'$evaluador','$dictamen','$comentarios',$precio,'$unidad','$tipo',$cant,'$varc1','$proceso','$precio1','$beneficios','$descuento')";

$alta= mysqli_query($link, $query);

?><div style="text-align: right;width:1200px">
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
<a class="dropdown-item" href="eva-eco-med-ch.php?id=<?php echo $id; ?>"> Nueva evaluación</a>
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
<p style="float:left;margin-left:10px"><span class="text-uppercase page-subtitle">Evaluación Economica</span></p>
<p style="float:left;margin-left:10px"><h3 class="page-title">Medicamentos</h3></p> 



<div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                     
                   
                      <tbody>

                        <tr>
                          <td>  <?php echo "CLAVE:";?>
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="clave" id="clave" class="form-control-lg mb-3"  value="<?php echo $clave12;?>" readonly>
                            <?php echo "PARTIDA:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="partida" id="partida" class="form-control-lg mb-3"  value="<?php echo $partida;?>" readonly>
                           <?php echo "PROVEEDOR:";?>
                          <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 350px; height: 50px;" name="proveedor" id="proveedor" class="form-control-lg mb-3"  value="<?php echo $proveedor;?>" readonly>
                        </tr>
                        <tr>
                          <td>  <?php echo "UNIDAD:";?>
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="unidad" id="unidad" class="form-control-lg mb-3"  value="<?php echo $unidad;?>" readonly>
                            <?php echo "TIPO:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="tipo" id="tipo" class="form-control-lg mb-3"  value="<?php echo $tipo;?>" readonly>
                           <?php echo "CANTIDAD:";?>
                          <input style="background-color:#dddddd;margin-left:10px;margin-right:0px; width: 350px; height: 50px;" name="cant" id="cant" class="form-control-lg mb-3"  value="<?php echo $cant;?>" readonly>
                        
                        

                       
                        
                        <tr>
                          <td>  <?php echo "PAIS DE ORIGEN:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="pais" id="pais" class="form-control-lg mb-3"  value="<?php echo $pais;?>" readonly>
                          <?php echo "OSD o PMR:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="osopm" id="osopm" class="form-control-lg mb-3"  value="<?php echo $osopm;?>" readonly>
                          <?php echo "PROCESO:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px; width: 300px" name="proceso" id="proceso" class="form-control-lg mb-3"  value="<?php echo $proceso;?>" readonly>
                          
                         
                        </tr>

                        
                        <tr>
                        <td>  <?php echo "Cantidad Min. Solicitada:";?>
                        <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cantidadmin" id="cantidadmin" class="form-control-lg mb-3"  value="<?php echo $cantidadmin;?>" readonly>
                          <?php echo "Cantidad Max. Solicitada:";?>
                           <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cantidadmax" id="cantidadmax" class="form-control-lg mb-3"  value="<?php echo $cantidadmax;?>" readonly>
                         <BR>
                          <?php echo "PMR:";?>
                          <input style="background-color:#dddddd;margin-left:10px;margin-right:0px;height: 50px;" name="cant" id="cant" class="form-control-lg mb-3"  value="<?php echo $precio1;?>" readonly>
                        <?php echo "Descuento:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="descuento" id="descuento" class="form-control-lg mb-3"  value="<?php echo $descuento;?>" readonly>
                          <?php echo "Porcentaje de abasto:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="porcentajeabasto" id="porcentajeabasto" class="form-control-lg mb-3"  value="<?php echo $porcentajeabasto;?>" readonly>
                        </tr>

                        
                      
                        
                        <tr>
                          <td>  <?php echo "Cantidad Max. Ofertada:";?>
                          <td>  <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="maxofertada" id="maxofertada" class="form-control-lg mb-3"  value="<?php echo $maxofertada;?>" readonly>
                          <?php echo "Cantidad Min. Ofertada:";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="minofertada" id="minofertada" class="form-control-lg mb-3"  value="<?php echo $minofertada;?>" readonly>
                          <?php echo "PRECIO";?>
                          <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="precio" id="precio" class="form-control-lg mb-3"  value="<?php echo $precio;?>" readonly>
                        </tr>

                        <tr>
                          <td>  <?php echo "DESCRIPCION:";?></td>
                          <td>  <textarea id="descripcion" name="descripcion" maxlength="500" aria-invalid="false" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo $descripcion;?></textarea></td>
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
                          <th scope="col" class="border-0">DOCUMENTACIÓN ECONOMICA</th>
                          <th scope="col" class="border-0">EVALUACION</th>
                       
                        
                        </tr>
                      </thead>
                   
                      <tbody>

                        <tr>

                          <td>  <?php echo "1. FORMATO DE PROPUESTA ECONÓMICA. ";?></td>
                          
                          <td> <input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="cumple1" id="cumple1" class="form-control-lg mb-3"  value="<?php echo $cumple1;?>" readonly></td>
                          </tr>
                         
                        
                        </tr>

                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                  </div> 
                  <?php
                 

                  ?>
                 <p style="float:left;margin-left:10px"><br>CAUSA DE DESECHAMIENTO:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="desechamiento" id="desechamiento" class="form-control-lg mb-3"  value="<?php echo $varc1;?>" readonly></p>

                 <p style="float:left;margin-left:10px"><br>EVALUADOR:<input style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:50px; width: 625px; height: 50px;" name="evaluador" id="evaluador" class="form-control-lg mb-3"  value="<?php echo $evaluador;?>" readonly></p>
                 <p style="float:left;margin-left:10px"> <br> DICTAMEN FINAL:   <input style="background-color:#dddddd;margin-right:170px; width: 600px; height: 50px;" name="dictamen" id="dictamen" class="form-control-lg mb-3"  value="<?php echo $dictamen;?>" readonly></p>
                 <p style="float:left;margin-left:10px"><br>BENEFICIOS:<textarea name="beneficios" id="beneficios" cols="40" rows="5" maxlength="5000" style="padding:12px;background-color:#dddddd;margin: 0px 15.6597px 0px 0px; width: 1000px; height: 128px;"  type="text" readonly><?php echo $beneficios; ?></textarea></p>
                 <p style="float:left;margin-left:10px"><br>    COMENTARIOS: <textarea style="background-color:#dddddd; margin-right:390px; width: 620px; height: 128px;" name="comentarios" id="comentarios" class="form-control-lg mb-3"  value="<?php echo $comentarios;?>" readonly></textarea></p>
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


<!--<a href="..?username=<?php echo $usertra;?>&tipo=<?php echo $tipoo;?>&nombre=<?php echo $nombre;?>&APaterno=<?php echo $APaterno;?>&AMaterno=<?php echo $AMaterno;?>">Regresar</a>

<button onclick="myFunction()">lol</button>-->
