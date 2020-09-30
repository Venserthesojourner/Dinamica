<?php 
$Titulo = " Ejercicio 3"; 
include_once("../../../Estructura/cabecera.php");
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    
    <div class="card text-center">
        <div class="card-header">
            <span id="tp"> TRABAJO PRACTICO 1 </span>
        </div>

        <div class="card-body">
            <p class="card-text">
            Crear una página php que contenga un formulario HTML como el que se indica en la
                imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                Cambiar el método Post por Get y analizar las diferencias
            </p>
        </div>

        <div class="card-footer text-muted">
            <span class="badge badge-secondary">EJ 3</span>
        </div>
    </div>
    <br>
    <form action="accion.php" method="POST" id="eje3" name="eje3">
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
        <button type="submit" class="btn btn-dark"> enviar </button>
    </form>
</main>
    <?php 
        include_once("../../../Estructura/pie.php");
    ?>
