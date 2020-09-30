<?php 
$Titulo = " Ejercicio 2"; 
include_once("../../../Estructura/cabecera.php");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

        <div class="card text-center">
        <div class="card-header">
            <span id="tp"> TRABAJO PRACTICO 1 </span>
        </div>
        <div class="card-body">
            <p class="card-text">
            Crear una página php que contenga un formulario HTML que permita ingresar las horas
        de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
        Enviar los datos del formulario por el método Get a otra página php que los reciba y
        complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
        se cursan por semana.
            </p>

        </div>
        <div class="card-footer text-muted">
            <span class="badge badge-secondary">EJ 2</span>
        </div>
        </div>

    <form action="accion.php" method="GET" id="ejecicio2" name="eje2">
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="Array">Lunes </label>
            <input type="text" class="form-control" id="Array1" name="Array[]" placeholder="Ingrese el numero de horas" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="Array">Martes </label>
            <input type="text" class="form-control" id="Array2" name="Array[]" placeholder="Ingrese el numero de horas" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="Array">Miercoles </label>
            <input type="text" class="form-control" id="Array3" name="Array[]" placeholder="Ingrese el numero de horas" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="Array">Jueves </label>
            <input type="text" class="form-control" id="Array4" name="Array[]" placeholder="Ingrese el numero de horas" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="Array">Viernes </label>
            <input type="text" class="form-control" id="Array5" name="Array[]" placeholder="Ingrese el numero de horas" required>
            </div>
        </div>
        <button type="submit" class="btn btn-dark"> enviar </button>
    </form>
</main>


    <?php 
        include_once("../../../Estructura/pie.php");
    ?>


