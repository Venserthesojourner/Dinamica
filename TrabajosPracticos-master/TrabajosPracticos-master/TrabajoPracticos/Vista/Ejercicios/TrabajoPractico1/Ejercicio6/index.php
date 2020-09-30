<?php 
$Titulo = " Ejercicio 6"; 
include_once("../../../Estructura/cabecera.php");
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

    <div class="card text-center">
            <div class="card-header">
                <span id="tp"> TRABAJO PRACTICO 1 </span>
            </div>

            <div class="card-body">
                <p class="card-text">
                    Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                    deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                    que procesa el formulario la cantidad de deportes que practica.
                </p>
            </div>

            <div class="card-footer text-muted">
                <span class="badge badge-secondary">EJ 6</span>
            </div>
        </div>
        <br>
        <form action="accion.php" method="POST" id="form" id="eje6" name="eje6">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="nombre">Nombre </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Homero" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="apellido">Apellido </label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ejemplo: Thompson" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="edad">Edad </label>
                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Ejemplo: 18" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address">Direccion </label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Ejemplo: calle falsa 123" required>
                </div>
            
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-9 pt-0">Seleccione su nivel de estudios: </legend>
                        <div class="col-sm-10">
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
                    <div class="col-sm-9">Marque que deporte realiza: </div>
                        <div class="col-sm-10">
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
            
                <div class="form-group row">
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-dark"> enviar </button>
                    </div>
                </div>
            </div>
        </form>
</main>

    <?php 
        include_once("../../../Estructura/pie.php");
    ?>

