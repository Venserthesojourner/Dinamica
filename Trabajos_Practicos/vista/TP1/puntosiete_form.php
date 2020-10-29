<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->

<?php 
$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Siete";
$enunciado = "Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación.";

include_once("marco/head.php");
?>

<div class="col-m-6">
    <form action="puntosiete_solution.php" method="get" onsubmit="return validarOperacion();">
    <div><input type="number" name="1erfactor" id="1erfactor" required></div>
    <div>
    <select name="operaciones" id="operaciones" required>
    <option value="" disabled selected>OPERACIONES</option>
    <option value="+">Suma</option>
    <option value="-">Resta</option>
    <option value="*">Multiplicacion</option>
    <option value="/">Division</option></select>
    </div>
    <div>
    <input type="number" name="2dofactor" id="2dofactor" required>
    </div>
    <div><input type="submit" value="="></div>
    </form>
</div>   
</div>
<?php 
include_once("marco/footer.php");
?>