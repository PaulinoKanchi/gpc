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
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
    

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
                <span class="text-uppercase page-subtitle">Catalogo</span>
                <h3 class="page-title">Procesos de Medicamentos</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0" id="example" class="display" style="width:100%">
                   
                      <thead class="bg-light">
                        <tr>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-0">ID</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-0">Clave</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-0">Descripcion</th>                         
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-0">Proceso</th>
                          <th style="background-color: #9F2241;color:white;" scope="col" class="border-0">Procedimiento</th>
                          
                          
                        </tr>
                      </thead>
                    
                      <tbody>

                        <tr>
                        <?php
                             
                             include_once('conexiondb.php');
                             $conn=new Conexion();
                             $link= $conn->conectarse();
                             
                             //$proveedor=$_POST['proveedor'];
                             
                             $mostrar= mysqli_query($link, "SELECT * FROM catalogo_medicamentos as c
                             join procesos_medicamentos as p on c.clave=p.clave_med
                             join catalogo_procesos as cp on p.id_cat_procesos=cp.id_cat_procesos");
  

while ($row = mysqli_fetch_row($mostrar)) {
    
?>
                         
                         <td>  <?php echo "$row[0]";?></td>
                          <td>  <?php echo "$row[1]";?></td>
                          <td>  <?php echo "$row[2]";?></td>
                          <td>  <?php echo "$row[29]";?></td>
                          <td>  <?php echo "$row[30]";?></td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
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
      } );
    </script>
  </body>
</html>