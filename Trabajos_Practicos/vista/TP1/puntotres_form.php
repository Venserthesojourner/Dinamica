<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->


<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Tres";
$enunciado = "Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias";
include_once("marco/head.php");
?>

<div id="box">
<form action="puntotres_solution.php" method="post" class="needs-validation">
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="nombre">Nombre </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el Nombre" required>
            
            </div>
            <div class="col-md-6 mb-3">
            <label for="apellido">Apellido </label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba el Apellido" required>
                       
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-4">
            <label for="edad">Edad </label>
            <input type="text" class="form-control" id="edad" name="edad" placeholder="Aca va a su edad" required>
            

            </div>
            <div class="col-md-6 mb-4">
            <label for="direccion">Direccion </label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Y aca tu direccion" required>
            
            </div>
            <div class="col-md-6 mb-4">
            <button type="submit" class="btn btn-dark"> ENVIAR </button>
            <input type="reset" class="btn btn-primary" value="Borrar">
            </div>
        </div>        
        
</form>
</div>

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
</body>
<?php 
include_once("marco/footer.php");
?>