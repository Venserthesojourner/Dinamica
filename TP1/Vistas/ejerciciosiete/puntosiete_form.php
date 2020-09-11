<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://localhost/Programacion%20Dinamica/TP1/Control/controlscripts.js"></script>
    <title>Ejercicio Siete</title>
</head>
<body>
    <form action="puntosiete_solution.php" method="get" onsubmit="validarOperacion()">
    <input type="number" name="1erfactor" required>
    <input type="number" name="2dofactor" required>
    <select name="operaciones" id="operaciones">
    <option value="" disabled>operaciones</option>
    <option value="+">Suma</option>
    <option value="-">Resta</option>
    <option value="*">Multiplicacion</option>
    <option value="/">Division</option></select>
    <input type="submit" value="=">
    </form>
    
</body>
</html>