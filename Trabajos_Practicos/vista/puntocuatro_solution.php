<?php
$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Cuatro";
$enunciado = "Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes";
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");


$obj = new realizarOperaciones();
$datos = data_submitted();
$rta = $obj->crearCard($datos);
$msjedad = $obj->mensajeEdad($datos);
?>
<div id="box">
	<?php echo $rta?>
<div>
<div>
    <?php echo $msjedad?>
</div>
<form action="puntodos_form.php">
	<input type="submit" value="Volver">
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>