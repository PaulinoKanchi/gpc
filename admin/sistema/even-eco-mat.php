<?php include_once('error.php');?>
<div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-title"> Reportes </span>
                <h3 class="page-title"> Economico de Material</h3>
              </div>
            </div>
<?php
  include ('conexionmysql.php');
          ?>

<div style="margin-left:5px">

<h2></h2>



 



<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

<button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-info">Exportar a Excel</button>

</form>



 

<table style="width:100px" id="" border = "1 solid black">

<tr>

<th >ID  </th>
<th >CLAVE  </th>
<th >OSMoPMR  </th>
<th >PARTIDA  </th>
<th >PROVEEDOR  </th>
<th >PAIS DE ORIGEN </th>
<th >UNIDAD  </th>
<th >TIPO</th>
<th >CANTIDAD  </th>
<th >REGISTRO SANITARIO  </th>
<th >FECHA DE EXPEDICION  </th>
<th >FECHA DE VENCIMIENTO  </th>
<th >MINIMA SOLICITADA  </th>
<th >MAXIMA SOLICITADA  </th>
<th >MINIMA OFERTADA  </th>
<th >MAXIMA OFERTADA  </th>
<th >PRECIO  </th>
<th >FECHA DE EVALUACIÓN  </th>
<th >EVALUADOR  </th>
<th >DICTAMEN FINAL </th>
<th>COMENTARIOS  </th>
</tr>

 

<tbody style="width:400px">

<?php foreach($libroseconomicamat as $libroseconomicamat) { ?>

<tr>

<td><?php echo $libroseconomicamat ["id"]; ?></td>
<td><?php echo $libroseconomicamat ["clave12"]; ?></td>
<td><?php echo $libroseconomicamat ["ospm"]; ?></td>
<td><?php echo $libroseconomicamat ["partida"]; ?></td> 
<td><?php echo $libroseconomicamat ["proveedor"]; ?></td> 
<td><?php echo $libroseconomicamat ["pais"]; ?></td> 
<td><?php echo $libroseconomicamat ["unidad"]; ?></td> 
<td><?php echo $libroseconomicamat ["tipo"]; ?></td> 
<td><?php echo $libroseconomicamat ["cant"]; ?></td> 
<td><?php echo $libroseconomicamat ["registro_sanitario"]; ?></td> 
<td><?php echo $libroseconomicamat ["fechaexp"]; ?></td> 
<td><?php echo $libroseconomicamat ["fechaven"]; ?></td> 
<td><?php echo $libroseconomicamat ["tecnica_minima"]; ?></td> 
<td><?php echo $libroseconomicamat ["tecnica_maxima"]; ?></td> 
<td><?php echo $libroseconomicamat ["minofertada"]; ?></td> 
<td><?php echo $libroseconomicamat ["maxofertada"]; ?></td> 
<td><?php echo $libroseconomicamat ["precio"]; ?></td> 
<td><?php echo $libroseconomicamat ["fechacreacion"]; ?></td> 
<td><?php echo $libroseconomicamat ["evaluador"]; ?></td> 
<td><?php echo $libroseconomicamat ["dictamen"]; ?></td>
<td><?php echo $libroseconomicamat ["comentarios"]; ?></td> 
</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php

if(isset($_POST["export_data"])) {

if(!empty($libroseconomicamat)) {

$filename = "reporte.xls";

header("Content-Type:application/vnd.ms-excel");

header("Content-Disposition: attachment; filename=".$filename);

 

$mostrar_columnas = false;


foreach($libroseconomicamat as $libroseconomicamat) {

if(!$mostrar_columnas) {


$mostrar_columnas = true;

}


}

 

}else{

echo "No hay datos a exportar";

}

exit;

}

?>