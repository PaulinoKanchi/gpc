
<?php
  include ('conexionmysql.php');
          ?>

<div class="container">

<h2>Exportar datos a Excel con PHP y MySQL</h2>

 

<div class="well-sm col-sm-12">

<div class="btn-group pull-right">

<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

<button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-info">Exportar a Excel</button>
<a href="rp.php?id=<?php echo $id; ?>">Regresar</a>

</form>

</div>

</div>

 

<table style="width:100%" id="" border = "1 solid black">

<tr>

<th>ID  </th>
<th>CLAVE  </th>
<th>OSMoPMR  </th>
<th>PARTIDA  </th>
<th>PROVEEDOR  </th>
<th>PAIS DE ORIGEN  </th>
<th>REGISTRO SANITARIO  </th>
<th>MINIMA SOLICITADA  </th>
<th>MAXIMA SOLICITADA  </th>
<th>MINIMA OFERTADA  </th>
<th>MAXIMA OFERTADA  </th>
<th>PRECIO  </th>
<th>FECHA DE EVALUACIÓN  </th>
<th>EVALUADOR  </th>
<th>DICTAMEN  </th>
<th>DESCRIPCION  </th>

</tr>

 

<tbody>

<?php foreach($libros as $libro) { ?>

<tr>

<td><?php echo $libro ["id"]; ?></td>
<td><?php echo $libro ["clave12"]; ?></td>
<td><?php echo $libro ["ospm"]; ?></td>
<td><?php echo $libro ["partida"]; ?></td> 
<td><?php echo $libro ["proveedor"]; ?></td> 
<td><?php echo $libro ["pais"]; ?></td> 
<td><?php echo $libro ["registro_sanitario"]; ?></td> 
<td><?php echo $libro ["tecnica_minima"]; ?></td> 
<td><?php echo $libro ["tecnica_maxima"]; ?></td> 
<td><?php echo $libro ["minofertada"]; ?></td> 
<td><?php echo $libro ["maxofertada"]; ?></td> 
<td><?php echo $libro ["tecnica_precio"]; ?></td> 
<td><?php echo $libro ["fechacreacion"]; ?></td> 
<td><?php echo $libro ["evaluador"]; ?></td> 
<td><?php echo $libro ["dictamen"]; ?></td> 
<td><?php echo $libro ["descripcion"]; ?></td> 

</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php

if(isset($_POST["export_data"])) {

if(!empty($libros)) {

$filename = "libros.xls";

header("Content-Type:application/vnd.ms-excel");

header("Content-Disposition: attachment; filename=".$filename);

 

$mostrar_columnas = false;


foreach($libros as $libro) {

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