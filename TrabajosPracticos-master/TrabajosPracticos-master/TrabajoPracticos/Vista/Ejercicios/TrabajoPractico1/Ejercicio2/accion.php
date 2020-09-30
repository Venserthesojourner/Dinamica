<?php 
    $Titulo = " Ejercicio 2"; 
    include_once("../../../Estructura/cabecera.php");
?>
<div>
    <?php 

        $datos = data_submitted();
        $obj = new control_ej2();
        //print_r($datos);

        $respuesta = $obj->verInformacion($datos);

    ?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">LA RESPUESTA ES: </h4>
        <p>Aww yeah, <?php echo $respuesta ?> </p>
        <hr>
        <p class="mb-0">...  El equivalente a las horas que tarda un episodio de Elif </p>
        </div>
    </div>

</div>


<?php 

include_once("../../../Estructura/pie.php");
?>
