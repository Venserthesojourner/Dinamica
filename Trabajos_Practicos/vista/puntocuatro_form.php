<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->


<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Cuatro";
$enunciado = "Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes";
include_once("marco/head.php");
?>

<div id="box">
<form action="puntocuatro_solution.php" method="get" class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="nombre">Nombre </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el Nombre" required>
            <div class="invalid-feedback">Debe ingresar al menos un valor</div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="apellido">Apellido </label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba el Apellido" required>
            <div class="invalid-feedback">Debe ingresar al menos un valor</div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-4">
            <label for="edad">Edad </label>
            <input type="text" class="form-control" id="edad" name="edad" placeholder="Aca va a su edad" required>
            <div class="invalid-feedback">Debe ingresar al menos un valor</div>
            </div>
            <div class="col-md-6 mb-4">
            <label for="direccion">Direccion </label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Y aca tu direccion" required>
            <div class="invalid-feedback">Debe ingresar al menos un valor</div>
            </div>
            <div class="col-md-6 mb-4">
            <button type="submit" class="btn btn-dark"> ENVIAR </button>
            <input type="reset" class="btn btn-primary" value="Borrar">
            </div>
        </div>        
        
</form>

<script>
    bootstrapValidate('#nombre', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#nombre', 'alpha:Solo utilize letras');
    bootstrapValidate('#nombre', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#apellido', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#apellido', 'alpha:Solo utilize letras');
    bootstrapValidate('#apellido', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#edad', 'numeric:Solo utilize numeros');
    bootstrapValidate('#edad', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#direccion', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#direccion', 'alpha:Solo utilize letras');
    bootstrapValidate('#direccion', 'required:Debe Ingresar al menos un nombre');
</script>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>