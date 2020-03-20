<?php include_once('error.php');?>
 <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-title"> Reportes </span>
                <h3 class="page-title"> Legal y Administrativa de Material de Curación</h3>
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
<th >RAZÓN SOCIAL</th>
<th >RFC</th>
<th >REPRESENTANTE LEGAL </th>
<th >FECHA DE EVALUACIÓN  </th>
<th >EVALUADOR  </th>
<th >DICTAMEN FINAL </th>
<th>COMENTARIOS </th>

</tr>

 

<tbody style="width:400px">

<?php foreach($libroslegalmat as $libroslegalmat) { ?>

<tr>

<td><?php echo $libroslegalmat ["id"]; ?></td>
<td><?php echo $libroslegalmat ["razon_social"]; ?></td>
<td><?php echo $libroslegalmat ["rfc"]; ?></td>
<td><?php echo $libroslegalmat ["representante_legal"]; ?></td> 
<td><?php echo $libroslegalmat ["fechacreacion"]; ?></td> 
<td><?php echo $libroslegalmat ["evaluador"]; ?></td> 
<td><?php echo $libroslegalmat ["dictamen"]; ?></td> 
<td><?php echo $libroslegalmat ["comentarios"]; ?></td> 

</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php

if(isset($_POST["export_data"])) {

if(!empty($libroslegalmat)) {

$filename = "reporte.xls";

header("Content-Type:application/vnd.ms-excel");

header("Content-Disposition: attachment; filename=".$filename);

 

$mostrar_columnas = false;


foreach($libroslegalmat as $libroslegalmat) {

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