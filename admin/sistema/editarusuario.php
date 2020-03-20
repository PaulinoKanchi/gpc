<?php include_once('error.php');



$id=$_GET['id'];
$username=$_GET['username'];
$pass=$_GET['pass'];
$nombre=$_GET['nombre'];
$APaterno=$_GET['APaterno'];
$AMaterno=$_GET['AMaterno'];
$puesto=$_GET['puesto'];
$telofi=$_GET['telofi'];
$ubiofi=$_GET['ubiofi'];
$calle=$_GET['calle'];
$numext=$_GET['numext'];
$piso=$_GET['piso'];
$colonia=$_GET['colonia'];
$alcaldia=$_GET['alcaldia'];
$cp=$_GET['cp'];
$entidad=$_GET['entidad'];
$profesion=$_GET['profesion'];
$cedula=$_GET['cedula'];
$rfc=$_GET['rfc'];






?>
<!doctype html>
<html class="no-js h-100" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SEIM</title>
   <!--hash md5-->
    

    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <main class="main-content col-lg-12 col-md-9 col-sm-12 p-0 offset-lg-0 offset-md-3">
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">EDITAR REGISTRO</span>
                <h3 class="page-title">EDITAR USUARIO</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                  <form class="add-new-post" method="post" action="editar-usuario.php">
                      <select class="form-control-lg mb-3" name="tipo" >
                      <option>Tipo Usuario</option>
                      <option>Administrador</option>
                      <option>Observador</option>
                      <option>Tecnico</option>
                      <option>Legal</option>
                      <option>Economico</option>
                      </select>
                      ID: <input class="form-control-lg mb-3" name="id" value ="<?php echo $id;?>" type="text" required placeholder="Nombre de Usuario" readonly>

                      NOMBRE: <input class="form-control-lg mb-3" name="username" value ="<?php echo $username;?>" type="text" required placeholder="Nombre de Usuario">
                      CONTRASEÑA:<input class="form-control-lg mb-3" name="pass" value ="<?php echo $pass;?>" type="password" required placeholder="Contraseña">
                      NOMBRE:<input class="form-control-lg mb-3" name="nombre" value ="<?php echo $nombre;?>" type="text" required placeholder="Nombre">
                      APELLIDO PATERNO:<input class="form-control-lg mb-3" name="APaterno" value ="<?php echo $APaterno;?>" type="text" placeholder="Apellido Paterno">
                      APELLIDO MATERNO:<input class="form-control-lg mb-3" name="AMaterno" value ="<?php echo $AMaterno;?>" type="text" placeholder="Apellido Materno">
                      <select class="form-control-lg mb-3" name="institucion" >
                      <option>Institucion</option>
                      <option>IMSS</option>
                      <option>ISSSTE</option>
                      <option>Pemex</option>
                      <option>PYRS</option>
                      <option>Secretaría de Marina</option>
                      <option>SHCP</option>
                      <option>Secretaría de Salud</option>
                      </select>
                      PUESTO:<input class="form-control-lg mb-3" name="puesto" value ="<?php echo $puesto;?>" type="text" placeholder="Puesto" required>
                      PROFESEION:<input class="form-control-lg mb-3" name="profesion"value ="<?php echo $profesion;?>" type="text" placeholder="Profesión" required>
                      CEDULA:<input class="form-control-lg mb-3" name="cedula" value ="<?php echo $cedula;?>" type="text" placeholder="Cedula" required>
                      RFC:<input class="form-control-lg mb-3" name="rfc" value ="<?php echo $rfc;?>" type="text" placeholder="RFC" maxlength=13 pattern="(([A-Z]{4}||[a-z]{4})[0-9]{6}([A-Z]{1}||[a-z]{1}||[0-9]{1})([A-Z]{1}||[a-z]{1}||[0-9]{1})([A-Z]{1}||[a-z]{1}||[0-9]{1}))||(([A-Z]{4}||[a-z]{4})[0-9]{6})" required>
                      TELEFONO DE OFICINA:<input class="form-control-lg mb-3" name="telofi" value ="<?php echo $telofi;?>" type="text" placeholder="Telefono de Oficina"  minlength=8 maxlength=10 required>



                      <h3 class="page-title">Ubicacion de Oficina</h3>
                      CALLE:<input class="form-control-lg mb-3" name="calle" value ="<?php echo $calle;?>" type="text" placeholder="Calle" required>
                      NUMERO EXTERIOR:<input class="form-control-lg mb-3" name="numext" value ="<?php echo $numext;?>" type="text" placeholder="Numero Ext" required>
                      PISO:<input class="form-control-lg mb-3" name="piso" value ="<?php echo $piso;?>" type="text" placeholder="Piso">
                      COLONIA:<input class="form-control-lg mb-3" name="colonia" value ="<?php echo $colonia;?>" type="text" placeholder="Colonia" required>
                      ALCALDIA:<input class="form-control-lg mb-3" name="alcaldia" value ="<?php echo $alcaldia;?>"type="text" placeholder="Alcaldia o Municipio">
                      C.P.:<input class="form-control-lg mb-3" name="cp" value ="<?php echo $cp;?>" type="text" placeholder="C.P." maxlength=5 required>
                      ENTIDAD:<input class="form-control-lg mb-3" name="entidad" value ="<?php echo $entidad;?>" type="text" placeholder="Entidad Federativa">
                      <br></br>
                      <button class="btn btn-sm btn-accent ml-auto">
                          <i class="material-icons">file_copy</i> Guardar</button>
                      
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            
              </div>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>
        <script type="text/javascript">

        // funcion que se ejecuta cada vez que se selecciona una opción

        function cambioOpciones()

        {

            document.getElementById('clave12').value=document.getElementById('partida2').value;
            

        }

    </script>
  </body>
</html>