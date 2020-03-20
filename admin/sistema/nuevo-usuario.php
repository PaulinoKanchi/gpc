<?php include_once('error.php');?>
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
                <span class="text-uppercase page-subtitle">AÑADIR REGISTRO</span>
                <h3 class="page-title">NUEVO USUARIO</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                  <form class="add-new-post" method="post" action="guardar-usuario.php">
                      <select class="form-control-lg mb-3" name="tipo" required >
                      <option>Tipo Usuario</option>
                      <option>Administrador</option>
                      <option>Observador</option>
                      <option>Tecnico</option>
                      <option>Legal</option>
                      <option>Economico</option>
                      </select>
                      <input class="form-control-lg mb-3" name="username" type="text" required placeholder="Nombre de Usuario">
                      <input class="form-control-lg mb-3" name="pass" type="password" required placeholder="Contraseña">
                      <input class="form-control-lg mb-3" name="name" type="text" required placeholder="Nombre">
                      <input class="form-control-lg mb-3" name="apaterno" type="text" placeholder="Apellido Paterno">
                      <input class="form-control-lg mb-3" name="amaterno" type="text" placeholder="Apellido Materno">
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
                      <input class="form-control-lg mb-3" name="puesto" type="text" placeholder="Puesto" >
                      <input class="form-control-lg mb-3" name="profesion" type="text" placeholder="Profesión" >
                      <input class="form-control-lg mb-3" name="cedula" type="text" placeholder="Cedula" >
                      <input class="form-control-lg mb-3" name="rfc" type="text" placeholder="RFC" maxlength=13 pattern="(([A-Z]{4}||[a-z]{4})[0-9]{6}([A-Z]{1}||[a-z]{1}||[0-9]{1})([A-Z]{1}||[a-z]{1}||[0-9]{1})([A-Z]{1}||[a-z]{1}||[0-9]{1}))||(([A-Z]{4}||[a-z]{4})[0-9]{6})">
                      <input class="form-control-lg mb-3" name="telefono" type="text" placeholder="Telefono de Oficina"  minlength=8 maxlength=10 >



                      <h3 class="page-title">Ubicacion de Oficina</h3>
                      <input class="form-control-lg mb-3" name="calle" type="text" placeholder="Calle" >
                      <input class="form-control-lg mb-3" name="numeroext" type="text" placeholder="Numero Ext" >
                      <input class="form-control-lg mb-3" name="piso" type="text" placeholder="Piso">
                      <input class="form-control-lg mb-3" name="colonia" type="text" placeholder="Colonia" >
                      <input class="form-control-lg mb-3" name="alcaldia" type="text" placeholder="Alcaldia o Municipio">
                      <input class="form-control-lg mb-3" name="cp" type="text" placeholder="C.P." maxlength=5 >
                      <input class="form-control-lg mb-3" name="entidad" type="text" placeholder="Entidad Federativa">
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