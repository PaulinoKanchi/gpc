<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEIM | Licitación</title>
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="anteriorsistema/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="anteriorsistema/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="anteriorsistema/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="anteriorsistema/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="anteriorsistema/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="anteriorsistema/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="anteriorsistema/css/util.css">
    <link rel="stylesheet" type="text/css" href="anteriorsistema/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="anteriorsistema/images/img-01.jpg" alt="IMG">
                </div>

                <div>
                        <span class="login100-form-title">
        <h2>Iniciar sesión</h2>
        
        </span>

    <form action="" method="POST">
       <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
       ?>
<div class="wrap-input100 validate-input">
        <p>Nombre de usuario: <br>
        <input class="input100" type="text" name="username"></p>
<span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                </div>

        <div class="wrap-input100 validate-input" >
        <p>Password: <br>
        <input class="input100" type="password" name="password"></p>
<span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                </div>


        <div class="container-login100-form-btn">
        <input type="submit" value="Iniciar Sesión" class="login100-form-btn">
</div>

    </form>



   </div>
   </div>
   </div>
   </div>
   
   <!--===============================================================================================-->
    <script src="anteriorsistema/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="anteriorsistema/vendor/bootstrap/js/popper.js"></script>
    <script src="anteriorsistema/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="anteriorsistema/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="anteriorsistema/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html> 