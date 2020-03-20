
<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
  <span class="text-uppercase page-title"> Reportes </span>
  <h3 class="page-title"> Legal de Medicamentos</h3>
</div>
<?php 
include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();
$id=$_GET['id'];
$id12=$_POST['id'];
//$proveedor=$_POST['proveedor'];

$libroslegalmed= mysqli_query($link, "SELECT * FROM medicamentos_legal
where proceso='$id12'");

?>
<!Doctype html>
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


<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

<button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-info">Exportar a Excel</button>
<a href="even-leg-med.php?id=<?php echo $id; ?>">Regresar</a>

</form>
<table style="margin: 25px;width:1500px" id="" border="1 solid black">

<tr>

<th style="background-color: #9F2241;color:white;">ID  </th>
<th style="background-color: #9F2241;color:white;">RAZÓN SOCIAL</th>
<th style="background-color: #9F2241;color:white;">RFC</th>
<th style="background-color: #9F2241;color:white;">PAIS DE ORIGEN </th>
<th style="background-color: #9F2241;color:white;">REPRESENTANTE LEGAL </th>
<th style="background-color: #9F2241;color:white;">FECHA DE EVALUACIÓN  </th>
<th style="background-color: #9F2241;color:white;">EVALUADOR  </th>
<th style="background-color: #9F2241;color:white;">DICTAMEN FINAL </th>
<th style="background-color: #9F2241;color:white;">COMENTARIOS  </th>
<th style="background-color: #9F2241;color:white;">PROCESO  </th>

</tr>



<tbody style="width:400px">

<?php foreach($libroslegalmed as $libroslegalmed) { ?>

    <tr>

<td><?php echo $libroslegalmed ["id"]; ?></td>
<td><?php echo $libroslegalmed ["razon_social"]; ?></td>
<td><?php echo $libroslegalmed ["rfc"]; ?></td>
<td><?php echo $libroslegalmed ["pais"]; ?></td> 
<td><?php echo $libroslegalmed ["representante_legal"]; ?></td> 
<td><?php echo $libroslegalmed ["fechacreacion"]; ?></td> 
<td><?php echo $libroslegalmed ["evaluador"]; ?></td> 
<td><?php echo $libroslegalmed ["dictamen"]; ?></td> 
<td><?php echo $libroslegalmed ["comentarios"]; ?></td> 
<td><?php echo $libroslegalmed ["proceso"]; ?></td> 


</tr>

  <?php } ?>

</tbody>

</table>
<?php

if (isset($_POST["export_data"])) {

  if (!empty($libroslegalmed)) {

    $filename = "reporte.xls";

    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");

    header("Content-Disposition: attachment; filename= $filename");



    $mostrar_columnas = false;


    foreach ($libroslegalmed as $libroslegalmed) {

      if (!$mostrar_columnas) {


        $mostrar_columnas = true;
      }
    }
  } else {

    echo "No hay datos a exportar";
  }

  exit;
}

?>
</body>
</html>