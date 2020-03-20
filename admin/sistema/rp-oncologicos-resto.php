<?php include_once('error.php'); ?>

<?php $id = $_GET['id']; ?>

<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-title"> Reportes </span>
    <h3 class="page-title"> GENERAL DE MEDICAMENTOS</h3>
</div>
<div style="text-align: right;width:1500px">
    <a href="index.php?id=<?php echo $id; ?>">Regresar</a>
</div>
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
    <form class="add-new-post" method="post" action="reporteoncologico.php?id=<?php echo $id; ?>">
        <?php
        include('mostrar-proveedores.php');
        ?>

        Procedimiento:
        <select id="proveedor" name="proceso" class="mimi form-control-lg mb-12" required>
            <option value="Seleccione Proveedor">Seleccione Proceso</option>
            <?php
            $mostrarsoloregistrados = mysqli_query($link, "SELECT * FROM catalogo_procesos where id_cat_procesos=8");
            while ($row = mysqli_fetch_row($mostrarsoloregistrados)) {
            ?>
                <option value="<?php echo "$row[1]" . " || " . "$row[2]"; ?>"><?php echo "$row[1]" . " || " . "$row[2]"; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Buscar" />
        <br>

    </form>

</body>


</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(document).ready(function() {
            $('.mimi').select2();

        });
    });

    function cambio() {
        document.getElementById('id').value = document.getElementById('proveedor').value;
    }
</script>