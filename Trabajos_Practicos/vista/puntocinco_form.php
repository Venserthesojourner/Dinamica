<!-- Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario: -->


<?php

$Titulo = "Practico Uno";
$subtitulo = "Ejercicio Cinco";
$enunciado = "Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo.";
include_once("marco/head.php");
?>

<div id="box">
<form action="puntotres_solution.php" method="post" class="needs-validation" novalidate>
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
            <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-6 pt-0">Seleccione su nivel de estudios: </legend>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="se" >
                                <label class="form-check-label" for="estudio">
                                    Sin Estudios
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="ep">
                                <label class="form-check-label" for="estudio">
                                    Estudios primarios
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudio" id="estudio" value="es" >
                                <label class="form-check-label" for="estudio">
                                    Estudios Secundarios
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-6 pt-0">Seleccione su sexo: </legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="m" >
                                <label class="form-check-label" for="sexo">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="f">
                                <label class="form-check-label" for="sexo">
                                    Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-6">Marque que deporte realiza: </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deporte" name="deporte[]" value="futbol">
                                <label class="form-check-label" for="deporte">
                                    Futbol
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deporte" name="deporte[]" value="basquet">
                                <label class="form-check-label" for="deporte">
                                    Basquet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deporte" name="deporte[]" value="tennis">
                                <label class="form-check-label" for="deporte">
                                    Tennis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deporte" name="deporte[]" value="voley">
                                <label class="form-check-label" for="deporte">
                                    Voley
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
            <button type="submit" class="btn btn-dark"> ENVIAR </button>
            </div>
        </div>        
        
</form>
</div>
</div>   
</body>
<?php 
include_once("marco/footer.php");
?>