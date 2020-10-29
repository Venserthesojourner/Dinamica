<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Cinco";
$enunciado = "Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo.";
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");


$obj = new realizarOperaciones();
$datos = data_submitted();
$rta = $obj->crearCard($datos);
$msjedad = $obj->mensajeEdad($datos);
$msjsexy = $obj->sexoYestudio($datos);
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

<form action="puntocinco_form.php">
	<input type="submit" value="Volver">
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>