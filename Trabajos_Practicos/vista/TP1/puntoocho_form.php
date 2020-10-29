<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->


<?php
 

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Ocho";
$enunciado = "La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.";
include_once("marco/head.php");

?>
<div id="box">
    <form action="puntoocho_solution.php" class="needs-validation" method="post" novalidate>
    <div class="form-group">
    <label for="edad">Ingrese su edad</label>
    <input type="number" class="form-control" name="edad" id="edad" placeholder="Ingrese su edad" required>
    <div class="valid-feedback">Correcto</div>
    <div class="invalid-feedback">Ingrese solo numeros mayores a 0</div>
    
    </div>
    <div class="form-group">
    <label for="rol">Es Estudiante?</label> 
    <select name="rol" id="rol" required>
        <option value="0">No</option>
        <option value="1">Si</option>
    </select>
    </div>
    </div>    
    <div><input type="submit" value="Calcular"></div>
    <input type="reset" class="btn btn-primary" value="Borrar">
    </form>
</div>   

<?php 
include_once("marco/footer.php");
?>