
<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
  
</div>
<?php 
include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();
$id=$_GET['id'];
$id12=$_POST['proceso'];
//$proveedor=$_POST['proveedor'];

$libros= mysqli_query($link, "SELECT * FROM medicamentos_tecnica
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
    <link rel="icon" type="image/png" href="../anteriorsistema/images/icons/escudoo.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
</head>



<body class="h-100">


<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

<button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-info">Exportar a Excel</button>
</form>
<table style="margin: 25px;width:1500px" id="" border="1 solid black">
<h5>Reportes Técnica de Medicamentos</h5>
<tr>
      <th style="background-color: #9F2241;color:white;">ID </th>
      <th style="background-color: #9F2241;color:white;">CLAVE </th>
      <th style="background-color: #9F2241;color:white;">OSMoPMR </th>
      <th style="background-color: #9F2241;color:white;">PARTIDA </th>
      <th style="background-color: #9F2241;color:white;">PROVEEDOR </th>
      <th style="background-color: #9F2241;color:white;">PAIS DE ORIGEN </th>
      <th style="background-color: #9F2241;color:white;">UNIDAD </th>
      <th style="background-color: #9F2241;color:white;">TIPO</th>
      <th style="background-color: #9F2241;color:white;">CANTIDAD </th>
      <th style="background-color: #9F2241;color:white;">REGISTRO SANITARIO </th>
      <th style="background-color: #9F2241;color:white;">FECHA DE EXPEDICION </th>
      <th style="background-color: #9F2241;color:white;">FECHA DE VENCIMIENTO </th>
      <th style="background-color: #9F2241;color:white;">MINIMA SOLICITADA </th>
      <th style="background-color: #9F2241;color:white;">MAXIMA SOLICITADA </th>
      <th style="background-color: #9F2241;color:white;">MINIMA OFERTADA </th>
      <th style="background-color: #9F2241;color:white;">MAXIMA OFERTADA </th>
      <th style="background-color: #9F2241;color:white;">EVALUADOR </th>
      <th style="background-color: #9F2241;color:white;">DICTAMEN FINAL </th>
      <th style="background-color: #9F2241;color:white;">COMENTARIOS </th>
      <th style="background-color: #9F2241;color:white;">PROCESO </th>
 
</tr>



<tbody style="width:400px">

  <?php foreach ($libros as $libro) { ?>

    <tr>
    <td><?php echo $libro["id"]; ?></td>
          <td><?php echo $libro["clave12"]; ?></td>
          <td><?php echo $libro["ospm"]; ?></td>
          <td><?php echo $libro["partida"]; ?></td>
          <td><?php echo $libro["proveedor"]; ?></td>
          <td><?php echo $libro["pais"]; ?></td>
          <td><?php echo $libro["unidad"]; ?></td>
          <td><?php echo $libro["tipo"]; ?></td>
          <td><?php echo $libro["cant"]; ?></td>
          <td><?php echo $libro["registro_sanitario"]; ?></td>
          <td><?php echo $libro["fechaexp"]; ?></td>
          <td><?php echo $libro["fechaven"]; ?></td>
          <td><?php echo $libro["tecnica_minima"]; ?></td>
          <td><?php echo $libro["tecnica_maxima"]; ?></td>
          <td><?php echo $libro["minofertada"]; ?></td>
          <td><?php echo $libro["maxofertada"]; ?></td>
          <td><?php echo $libro["evaluador"]; ?></td>
          <td><?php echo $libro["dictamen"]; ?></td>
          <td><?php echo $libro["comentarios"]; ?></td>
          <td><?php echo $libro["proceso"]; ?></td>
 
    </tr>

  <?php } ?>

</tbody>

</table>
<?php
if (isset($_POST["export_data"])) {
  if (!empty($libros)) {
    $filename = "reporte.xls";
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename= $filename");
    $mostrar_columnas = false;
    foreach ($libros as $libro) {
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
<div style="text-align: right;width:1500px">
<a href="rp.php?id=<?php echo $id; ?>">Regresar</a>
</body>
</html>