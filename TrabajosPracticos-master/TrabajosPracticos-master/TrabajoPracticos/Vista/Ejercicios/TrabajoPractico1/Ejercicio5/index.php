<?php 
$Titulo = " Ejercicio 5"; 
include_once("../../../Estructura/cabecera.php");
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

    <div class="card text-center">
        <div class="card-header">
            <span id="tp"> TRABAJO PRACTICO 1 </span>
        </div>

        <div class="card-body">
            <p class="card-text">
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo. 
            </p>
        </div>

        <div class="card-footer text-muted">
            <span class="badge badge-secondary">EJ 5</span>
        </div>
    </div>
    <br>
    <form action="accion.php" method="POST" id="eje5" name="eje5">
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
                <label for="direccion">Direccion </label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ejemplo: calle falsa 123" required>
            </div>
        </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-9 pt-0">Seleccione su nivel de estudios</legend>
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
                    <legend class="col-form-label col-sm-6 pt-0">Seleccione su sexo</legend>
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
                <div class="col-sm-10">
                <button type="submit" class="btn btn-dark"> enviar </button>
                </div>
            </div>
    </form>
  </main>
    <?php 
        include_once("../../../Estructura/pie.php");
    ?>

