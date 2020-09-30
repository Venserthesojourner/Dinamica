<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->


<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Uno";
$enunciado = "Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior.";
include_once("marco/head.php");

?>
<div id="box">
<form action="puntouno_solution.php" class="needs-validation" novalidate>

<label for="puntouno">Ingrese un numero</label>
<input type="number" class="form-control" placeholder="Ingrese un Numero" name="number" id="numberp1" required>
<input type="submit" value="Enviar">
<div class="valid-feedback">Es Correcto</div>
<div class="invalid-feedback">Ingrese solo numeros por favor</div>
</form>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>