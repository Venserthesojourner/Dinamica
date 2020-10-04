<?php
	
    $Titulo = "Practico Uno";
    $subtitulo = "Ejercicio Tres";
    $enunciado = "Crear una página php que contenga un formulario HTML como el que se indica en la
    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias";
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");


$obj = new realizarOperaciones();
$datos = data_submitted();
$rta = $obj->crearCard($datos);
?>
<div id="box">
	<?php echo $rta?>

<div>
<form action="puntodos_form.php">
	<input type="submit" value="Volver">
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>