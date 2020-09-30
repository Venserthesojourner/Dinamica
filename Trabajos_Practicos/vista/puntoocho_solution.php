<?php
?>

<?php 
$Titulo = "Ejercicio Ocho";
$enunciado = "La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.";

include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");

$obj = new realizarOperaciones();
$datos = data_submitted();

$precio = $obj->precioFinal($datos);
?>
<div id="box">
	<?php echo "El precio de la entrada es: $".$precio;?>

<div>
<form action="puntoocho_form.php">
	<input type="submit" value="Volver">
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>