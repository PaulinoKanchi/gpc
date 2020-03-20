
<?php

    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['user'])){
        $cliente = $_SESSION['user'];
    }else{
 header('Location: ../index.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>SISTEMA</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="../anteriorsistema/images/icons/escudoo.png"/>
    </head>

    <body>
        <div id="sesion_cliente">
            <?php 
            //Si existe la sesión "cliente"...
            if(isset($_SESSION['user'])){
                //Si existe y hemos pulsado el link "Salir"...
                if(isset($_REQUEST["salir"])){
                    //Borramos o destruimos la sesión "cliente".
                    unset($_SESSION["user"]);
                }
            }
            ?>
        </div>
    </body>
</html>
