<?php
$id = $_GET['id'];
$proceso = $_POST['proceso'];
?>

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
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />


  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body class="h-100">

  <div class="container-fluid">
    <div class="row">
      <main class="main-content col-lg-12 col-md-9 col-sm-12 p-0 offset-lg-0 offset-md-3">
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Reporte</span>
              <h3 class="page-title">General de Medicamentos Oncológicos</h3>
            </div>
          </div>
          <!-- End Page Header -->
          <!-- Default Light Table -->
          <button type="submit" id="export_data" name="export_data" value="Export to excel" class="btn btn-success">Exportar a Excel</button>
          <a class="btn btn-info" href="rp-oncologicos-resto.php?id=<?php echo $id; ?>">Regresar </a>
          <a class="btn btn-danger" href="index.php?id=<?php echo $id; ?>">Inicio</a>
          <div class="row">
            <div class="col">
              <div class="card card-small mb-4">

                <div class="card-body p-0 pb-3 text-center">

                  <form action="reportegeneral1.php" method="POST">



                    <table border="1" width="100%" id="example" class="display" style="width:100%">
                      <thead class="bg-light">
                        <tr>

                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Clave</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Partida</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Proveedor</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Descripcion</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Pais de Origen</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Cantidad Minima Solicitada</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Cantidad Maxima Solicitada</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Cantidad Minima Ofertada</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Cantidad Maxima Ofertada</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Porcentaje de Abasto</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">PMR</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Precio Ofertado</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Porcentaje de Descuento</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Dictamen Técnico</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Comentarios</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Beneficios</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Dictamen Económico</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Comentarios</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Beneficios</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-1">Proceso</th>




                        </tr>
                      </thead>
                      <input style="display:none" type="text" name="proceso" value="<?php echo $proceso; ?>" />
                      <tbody>

                        <tr>
                          <?php

                          include_once('conexiondb.php');
                          $conn = new Conexion();
                          $link = $conn->conectarse();

                          //$proveedor=$_POST['proveedor'];

                          /*$mostrar = mysqli_query($link, "SELECT * FROM medicamentos_tecnica
                             join medicamentos_economica on medicamentos_tecnica.clave12=medicamentos_economica.clave12
                             join medicamentos_legal on medicamentos_legal.razon_social=medicamentos_economica.proveedor and 
                             medicamentos_legal.razon_social=medicamentos_tecnica.proveedor and 
                             medicamentos_economica.proveedor=medicamentos_tecnica.proveedor
                             where medicamentos_legal.proceso='$proceso'");*/

                          $mostrar = mysqli_query($link, "SELECT DISTINCT * FROM medicamentos_tecnica
                            join medicamentos_economica on medicamentos_tecnica.clave12=medicamentos_economica.clave12
                            where medicamentos_economica.proceso='$proceso'");

                          while ($row = mysqli_fetch_row($mostrar)) {
                            $v1 = (int) $row[53];
                            $v2 = (int) $row[49];
                            $porcentaje = ((($v1) / ($v2)) * 100);
                            $por = number_format($porcentaje, 2, '.', '');
                          ?>


                            <td> <?php echo "$row[42]"; ?></td>
                            <td> <?php echo "$row[44]"; ?></td>
                            <td> <?php echo "$row[46]"; ?></td>
                            <td> <?php echo "$row[42]"; ?></td>
                            <td> <?php echo "$row[47]"; ?></td>
                            <td> <?php echo "$row[48]"; ?></td>
                            <td> <?php echo "$row[49]"; ?></td>
                            <td> <?php echo "$row[52]"; ?></td>
                            <td> <?php echo "$row[53]"; ?></td>
                            <td> <?php echo "$por" . "%"; ?></td>
                            <td> <?php echo "$row[81]"; ?></td>
                            <td> <?php echo "$row[73]"; ?></td>
                            <td> <?php echo "$row[83]"; ?></td>
                            <td> <?php echo "$row[29]"; ?></td>
                            <td> <?php echo "$row[30]"; ?></td>
                            <td> <?php echo "$row[40]"; ?></td>
                            <td> <?php echo "$row[71]"; ?></td>
                            <td> <?php echo "$row[72]"; ?></td>
                            <td> <?php echo "$row[82]"; ?></td>
                            <td> <?php echo "$row[80]"; ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>

                  </form>

                </div>
              </div>
            </div>
          </div>
          <!-- End Default Light Table -->

        </div>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
  <script src="scripts/extras.1.1.0.min.js"></script>
  <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>

</html>