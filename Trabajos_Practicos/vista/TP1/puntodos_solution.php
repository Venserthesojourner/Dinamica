<?php
	
$Titulo = "Practico Uno";
$subtitulo = "Ejercicio dos";
$enunciado = "Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana.";
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");


$obj = new realizarOperaciones();
$datos = data_submitted();
$rta = $obj->sumaHoras($datos);
?>
<div id="box">
	<?php echo "Se cursan ".$rta. " horas Semanales";?>

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