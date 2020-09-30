<?php 
$Titulo = " Ejercicio 7"; 
include_once("../../../Estructura/cabecera.php");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

        <div class="card text-center">
            <div class="card-header">
                <span id="tp"> TRABAJO PRACTICO 1 </span>
            </div>

            <div class="card-body">
                <p class="card-text">
                    Crear una página con un formulario que contenga dos input de tipo text y un select. En
                    los inputs se ingresarán números y el select debe dar la opción de una operación
                    matemática que podrá resolverse usando los números ingresados. En la página que
                    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                    uno de los operandos y el resultado obtenido de resolver la operación.
                </p>
            </div>

            <div class="card-footer text-muted">
                <span class="badge badge-secondary">EJ 7</span>
            </div>
        </div>
        <br>
        <form action="accion.php" method="POST" id="eje7" name="eje7">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="valor1">Ingrese el primer valor </label>
                <input type="text" class="form-control" id="valor1" name="valor1" placeholder="Ejemplo: 2" required>
                </div>
                <div class="col-md-6 mb-3">
                <label for="valor2">Ingrese el segundo valor </label>
                <input type="text" class="form-control" id="valor2" name="valor2" placeholder="Ejemplo: 2" required>
                </div>
                <div class="col-auto my-3" required>
                    <label class="mr-sm-2 sr-only" for="op">Seleccione una operacion: </label>
                    <select class="custom-select mr-sm-2" id="op" name="op">
                        <option selected> Operaciones </option>
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicacion</option>
                        <option value="division">Division</option>
                        <option value="modulos">Modulo</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-dark"> enviar </button>
        </form>
</main>


    <?php 
        include_once("../../../Estructura/pie.php");
    ?>

