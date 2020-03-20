<?php
    
    require ('../conexion.php');
    
    $id_cat_procesos = $_POST['id_cat_procesos'];
    $clave = $_POST['clave'];
    
    $queryM = "SELECT * FROM procesos_medicamentos as pm
    join catalogo_medicamentos as cm on pm.id_cat_medicamentos = cm.id
    join catalogo_procesos as cp on pm.id_cat_procesos=cp.id_cat_procesos
    WHERE cp.id_cat_procesos = '$id_cat_procesos'";
    $resultadoM = $mysqli->query($queryM);
    
    $html= "<option value='0'>Seleccionar Procedimiento</option>";
    
    while($rowM = $resultadoM->fetch_assoc())
    {
        $html.= "<option value='".$rowM['clave']."'>".$rowM['clave']." || ".$rowM['clave']."</option>";
        $partida=$rowM['partida'];
        $descripcion=$rowM['descripcion'];
        $unidad=$rowM['unidad'];
        $cantidad=$rowM['cantidad'];
        $tipo=$rowM['tipo'];
        $min=$rowM['min'];
        $max=$rowM['max'];
        $osopm=$rowM['osopm'];

    }


    
    echo $html;
    
?>  
<script>
    /*document.getElementById('clave').value = "<?php echo $clave?>";
    document.getElementById('partida').value = "<?php echo $partida;?>";
    document.getElementById('descripcion').value = "<?php echo $clave;?>";
    document.getElementById('unidad').value = "<?php echo $unidad;?>";
    document.getElementById('cantidad').value = "<?php echo $cantidad;?>";
    document.getElementById('tipo').value = "<?php echo $tipo;?>";
    document.getElementById('min').value = "<?php echo $min;?>";
    document.getElementById('max').value = "<?php echo $max;?>";
    document.getElementById('osopm').value = "<?php echo $osopm;?>";*/
    
</script>
   