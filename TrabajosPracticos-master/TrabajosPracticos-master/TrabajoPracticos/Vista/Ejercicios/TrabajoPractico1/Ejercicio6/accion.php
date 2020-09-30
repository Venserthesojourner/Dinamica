<?php 
    $Titulo = " Ejercicio 6"; 
    include_once("../../../Estructura/cabecera.php");
?>
<div>
    <?php
    //include_once("../Control/control_eje7.php"); 

    $datos = data_submitted();
    $obj = new control_ej6();
    //print_r($datos);

    $respuesta = $obj->verInformacion($datos);

    ?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">LA RESPUESTA ES: </h4>
        <p>Aww yeah, <?php echo $respuesta ?> </p>
        <hr>
        <p class="mb-0">... Buenos días, y por si no les vuelvo a ver, buenas tardes, y buenas noches.</p>
        </div>
    </div>
</div>


<?php 

include_once("../../../Estructura/pie.php");
?>
