<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Seis";
$enunciado = "Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica.";
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");


$obj = new realizarOperaciones();
$datos = data_submitted();
$rta = $obj->crearCard($datos);
$msjedad = $obj->mensajeEdad($datos);
$msjsexy = $obj->sexoYestudio($datos);
$msjdepo = $obj->haceDeportes($datos);
?>
<div id="box">
	<?php echo $rta?>
<div>
<div>
    <?php echo $msjedad?>
</div>
<div>
    <?php echo $msjsexy?>
</div>
<div>
    <?php echo "Esta personita realiza {$msjdepo} Deportes"?>
</div>

<form action="puntocinco_form.php">
    <input type="submit" value="Volver">
    
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>