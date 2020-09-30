<?php 
$Titulo = "Ejercicio Ocho";
$enunciado = "Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior.";

include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");

$obj = new realizarOperaciones();
$datos = data_submitted();

$rta = $obj->vernumero($datos);
?>
<div id="box">
	<?php echo $rta;?>

<div>
<form action="puntouno_form.php">
	<input type="submit" value="Volver">
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>