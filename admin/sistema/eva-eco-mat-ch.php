<?php include_once('error.php'); ?>
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

  ?>

  <div class="container-fluid">
    <div class="row">
      <main class="main-content col-lg-12 col-md-9 col-sm-12 p-0 offset-lg-0 offset-md-3">
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Material de Curación</span>
              <h3 class="page-title">Nueva Evaluación Económica</h3>
              <?php if ($tipoo == "Administrador") {
              ?>
                <a href="index.php?id=<?php echo $id; ?>">Regresar</a>

              <?php } else if ($tipoo == "Economico") {
              ?>
                <a href="indexeconomico.php?id=<?php echo $id; ?>">Regresar</a>
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

                  <form class="add-new-post" method="post" action="guardado-eco-mat-ch.php?id=<?php echo $id; ?>">

                    <?php
                    include 'index-auto.php';
                    ?>

                    </select>
                    <br>
                    <?php
                    include("comboeco/index.php");

                    ?>

                    <br>
                    <?php
                    include('mostrar-proveedores.php');
                    ?>
                    Proveedor: <select class="mi-selector form-control-lg mb-3" style="margin-left:5px;margin-right:5px" name="proveedor">
                      <option>Proveedor</option>
                      <?php
                      while ($row = mysqli_fetch_row($mostrar)) {
                      ?>
                        <option value="<?php echo "$row[1]"; ?>"><?php echo "$row[1]"; ?></option>
                      <?php } ?>
                    </select>
                     <br><br>
                    <button class="btn btn-sm btn-accent ml-auto"><i class="material-icons">file_copy</i> Verificar</button>
                    <input style="visibility:hidden;padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="clave" class="form-control-lg mb-3" name="clave" type="text" placeholder="Clave" readonly>
                   
                    <input class="form-control-lg mb-3" style="visibility:hidden;margin-left:10px;margin-right:10px" id="clave123" name="clave" required>
                    </div>

   

</div>
<div>
   <br>
   <input style="visibility:hidden; padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" id="clave12conp" class="form-control-lg mb-3" name="clave12conp" type="text" placeholder="Clave"  readonly>
   

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
                  <script type="text/javascript">
                    jQuery(document).ready(function($) {
                      $(document).ready(function() {
                        $('.mi-selector').select2();
                      });
                    }); {
                      document.getElementById('clave12').value = document.getElementById('partida2').value;;
                    }
                  </script>
</body>

</html>