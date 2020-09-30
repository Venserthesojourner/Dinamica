<?php 
    $Titulo = " Ejercicio 1"; 
    include_once("../../../Estructura/cabecera.php");
?>
<div>
    <?php 

        $datos = data_submitted();
        $obj = new control_ej1();
        //print_r($datos);

        $respuesta = $obj->verInformacion($datos);

    ?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">LA RESPUESTA ES: </h4>
        <p>Aww yeah, <?php echo $respuesta ?> </p>
        <hr>
        <p class="mb-0">...  Esto no es coca papi, nonono. </p>
        </div>
    </div>

</div>


<?php 

include_once("../../../Estructura/pie.php");
?>
