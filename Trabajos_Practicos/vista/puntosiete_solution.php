<?php 
$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Siete";
$enunciado = "Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación.";
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");

$obj = new realizarOperaciones();
$datos = data_submitted();

$resultado = $obj->operar($datos);
?>

<div id="box">
	<?php echo $resultado;?>

<div>
<form action="puntosiete_form.php">
	<input type="submit" value="Volver">
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>