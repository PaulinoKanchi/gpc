<?php include_once('error.php');?>
<?php
  include ('conexionmysql.php');
?><head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>SEIM - Licitacion</title>
<meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" type="image/png" href="../anteriorsistema/images/icons/escudoo.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
<link rel="stylesheet" href="styles/extras.1.1.0.min.css">

<script async defer src="https://buttons.github.io/buttons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
<style>
.estilotablasreporte{background-color: #9F2241;color:white;}
</style>
</head>

<div class="page-header row no-gutters py-4">
<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
<span class="text-uppercase page-title">Reportes</span>
<h3 class="page-title">Técnica de Material de Curación</h3>
</div>
</div>

<div style="margin-left:5px">
<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-info">Exportar a Excel</button>
</form>
<table style="margin: 25px;width:1500px" id="" border="1 solid black">
<tr>
<th class="estilotablasreporte">ID</th>
<th class="estilotablasreporte">CLAVE</th>
<th class="estilotablasreporte">OSMoPMR</th>
<th class="estilotablasreporte">PARTIDA</th>
<th class="estilotablasreporte">PROVEEDOR</th>
<th class="estilotablasreporte">PAIS DE ORIGEN</th>
<th class="estilotablasreporte">UNIDAD</th>
<th class="estilotablasreporte">TIPO</th>
<th class="estilotablasreporte">CANTIDAD</th>
<th class="estilotablasreporte">REGISTRO SANITARIO</th>
<th class="estilotablasreporte">FECHA DE VENCIMIENTO</th>
<th class="estilotablasreporte">FECHA DE EXPEDICION</th>
<th class="estilotablasreporte">MINIMA SOLICITADA</th>
<th class="estilotablasreporte">MAXIMA SOLICITADA</th>
<th class="estilotablasreporte">MINIMA OFERTADA</th>
<th class="estilotablasreporte">MAXIMA OFERTADA</th>
<th class="estilotablasreporte">FECHA DE EVALUACIÓN</th>
<th class="estilotablasreporte">EVALUADOR</th>
<th class="estilotablasreporte">DICTAMEN FINAL</th>
<th class="estilotablasreporte">COMENTARIOS</th>
</tr> 
<tbody style="width:400px">
<?php foreach($libros2 as $libro) { ?>
<tr>
<td><?php echo $libro ["id"]; ?></td>
<td><?php echo $libro ["clave12"]; ?></td>
<td><?php echo $libro ["ospm"]; ?></td>
<td><?php echo $libro ["partida"]; ?></td> 
<td><?php echo $libro ["proveedor"]; ?></td> 
<td><?php echo $libro ["pais"]; ?></td>
<td><?php echo $libro ["unidad"]; ?></td> 
<td><?php echo $libro ["tipo"]; ?></td> 
<td><?php echo $libro ["cant"]; ?></td> 
<td><?php echo $libro ["registro_sanitario"]; ?></td>
<td><?php echo $libro ["fechaexp"]; ?></td> 
<td><?php echo $libro ["fechaven"]; ?></td> 
<td><?php echo $libro ["tecnica_minima"]; ?></td> 
<td><?php echo $libro ["tecnica_maxima"]; ?></td> 
<td><?php echo $libro ["minofertada"]; ?></td> 
<td><?php echo $libro ["maxofertada"]; ?></td> 
<td><?php echo $libro ["fechacreacion"]; ?></td> 
<td><?php echo $libro ["evaluador"]; ?></td> 
<td><?php echo $libro ["dictamen"]; ?></td>
<td><?php echo $libro ["comentarios"]; ?></td> 
</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php
if(isset($_POST["export_data"])) {
if(!empty($libros2)) {
$filename = "reporte.xls";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= $filename");
$mostrar_columnas = false;
foreach($libros2 as $libro) {
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />