<?php include_once('error.php');
include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();

$id=$_GET['id'];
$consulta= mysqli_query($link, "SELECT * FROM usuarios where id=$id");

while ($row = mysqli_fetch_row($consulta)) {
  $usertra=$row[0];
  $tipoo=$row[20];
  $nombre=$row[2];
  $APaterno=$row[4];
  $AMaterno=$row[5];
     }

?>
<!doctype html>
<html class="no-js h-100" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SEIM – Partidas Desiertas</title>
    <link rel="stylesheet" href="main123.css">
    <link rel="icon" type="image/png" href="../anteriorsistema/images/icons/escudoo.png"/>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/NewStyle.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100" style="overflow: hidden;">


    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto navbar-align">
                 
                  <span class="d-none d-md-inline ml-1">Bienvenido  <?php  echo $nombre;?><br><?php echo ucfirst($tipoo);?>
                  </span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
         
          <div class="nav-wrapper">
            <ul class="nav flex-column">
               
            
              <li class="nav-item">
                    <a class="nav-link active" id="nav-home">
                      <!--<i class="material-icons">show_chart</i>-->
                      <i class="material-icons">home</i>
                      <span>Inicio</span>
                    </a> 
                  </li>
<!--desde aqui comienza catalogos-->
              <li class="nav-item">
                <a class="nav-link dropdown-toggle text-nowrap px-3 " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">view_column</i>
                  <span class="d-none d-md-inline-block">Catalogos</span>
                </a>

               

                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item"  id="nav-proveedores">
                      <i class="material-icons">business_center</i>Proveedores </a>
                  
                    <a class="dropdown-item" id="nav-paises">
                      <i class="material-icons">assistant_photo</i>Paises </a>
                  
                    
                  <a class="nav-link dropdown-toggle text-nowrap px-3 " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">local_hospital</i>Insumos </a>


                      <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" id="nav-medicamentos">
                      <i class="material-icons">library_add</i>Medicamentos </a>

                      <a class="dropdown-item" id="nav-material-cur">
                      <i class="material-icons">local_pharmacy</i>Material de curacion </a>

                      <a class="dropdown-item" id=""> 
                      <i class="material-icons">local_pharmacy</i>Reactivos de laboratorio </a>
                      </div>
                  </div>
                </li>


                <!--desde aqui comienzan las evaluaciones-->
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3 " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">library_add</i>
                  <span class="d-none d-md-inline-block">Medicamentos</span>
                </a>
                
                 <div class="dropdown-menu dropdown-menu-small">
                 
                      <a class="dropdown-item" href="eva-eco-med-ch.php?id=<?php echo $id;?>">
                      <i class="material-icons">description</i>Nva. Evaluación Económica</a>
                    </div>
                     
                     <li class="nav-item">
                <a class="nav-link dropdown-toggle text-nowrap px-3 " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">local_pharmacy</i>
                  <span class="d-none d-md-inline-block">Material de Curacion</span>
                </a>
                
               <div class="dropdown-menu dropdown-menu-small">
                 
                    <a class="dropdown-item" href="eva-eco-mat-ch.php?username=<?php echo $usertra;?>&tipo=<?php echo $tipoo;?>&nombre=<?php echo $nombre;?>&APaterno=<?php echo $APaterno;?>&AMaterno=<?php echo $AMaterno;?>">
                    <i class="material-icons">description</i>Nva. Evaluación Económica Material</a>

                   </div> 
             </li>

             

             <li class="nav-item">
                <a class="nav-link dropdown-toggle text-nowrap px-3 " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">assignment</i>
                  <span class="d-none d-md-inline-block">Reportes</span>
                </a>

               

                
                      <div class="dropdown-menu dropdown-menu-small">
                      <a class="dropdown-item" id="nav-even-eco-med">
                      <i class="material-icons">description</i>Reporte Eco. Medicamentos</a>

                  
                      <a class="dropdown-item" id="nav-even-eco-mat">
                      <i class="material-icons">description</i>Reporte Eco. Material</a>

</div>

                <li class="nav-item">
                <a class="nav-link " href=" ../includes/logout.php">
                    <i class="material-icons">exit_to_app</i>
                    <span>Cerrar Sesion</span>
                  </a>
                </li>
                
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid" id="main-container">

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
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
    <script type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/new-script.js"></script>



  </body>
</html>


