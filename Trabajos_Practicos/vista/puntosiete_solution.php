<?php
	include_once("configuracion.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php 
$Titulo = "Ejercicio Siete";
$enunciado = "Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación.";
$patita = "Luis Miguel Cañete";
include_once("../marco/head.php");
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
include_once("../marco/footer.php");
?>