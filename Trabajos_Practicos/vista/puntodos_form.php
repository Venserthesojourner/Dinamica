<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->


<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Dos";
$enunciado = "Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana.";
include_once("marco/head.php");
?>

<div id="box">
<form action="puntodos_solution.php" class="needs-validation" novalidate>

<label for="lunes">Lunes</label>
<select name="semana[]" id="lunes"><option value=""></option></select>
<label for="martes">Martes</label>
<select name="semana[]" id="martes"><option value=""></option></select>
<label for="miercoles">Miercoles</label>
<select name="semana[]" id="miercoles"><option value=""></option></select>
<label for="jueves">Jueves</label>
<select name="semana[]" id="jueves"><option value=""></option></select>
<label for="viernes">Viernes</label>
<select name="semana[]" id="viernes"><option value=""></option></select>
<script>
cargaHoras("lunes");
cargaHoras("martes");
cargaHoras("miercoles");
cargaHoras("jueves");
cargaHoras("viernes");
</script>

<input type="submit" value="Enviar">

</form>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>