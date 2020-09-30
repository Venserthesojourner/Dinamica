<?php 
$Titulo = " Ejercicio 8"; 
include_once("../../../Estructura/cabecera.php");
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

    <div class="card text-center">
                <div class="card-header">
                    <span id="tp"> TRABAJO PRACTICO 1 </span>
                </div>

                <div class="card-body">
                    <p class="card-text">
                    Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
                    tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras. <br><br>
                    Aplicar Bootstrap y validar los siguiente:<br>
                            - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
                                aceptar números. <br>
                            - El campo duración debe permitir un máximo de 3 números. <br>
                            - Todos los datos son obligatorios<br>
                            - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
                                formulario.<br>
                            - El botón “Borrar” debe limpiar el formulario. <br>
                            <br>
                            Aplicar Bootstrap.
                    </p>
                </div>

                <div class="card-footer text-muted">
                    <span class="badge badge-secondary">EJ 8</span>
                </div>
            </div>
            <br>
        <div class="card">
            <div class="card-body">
                        <div class="card-header">
                            <span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-film" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z"/>
                                </svg> Cinem@s 
                            </span>
                        </div><br>
                    <div class="col-md-12  order-md-1">
                        
                        <form class="form-signin" action="accion.php" method="POST" id="ejecicio" name="tp2ej4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder=" Ingrese el titulo" required>
                                    <div class="invalid-feedback">
                                    Ingrese el titulo
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="actores">Actores</label>
                                    <input type="text" class="form-control" id="actores" name="actores" placeholder="Separe a los actores por una ','" required>
                                    <div class="invalid-feedback">
                                    Ingrese el nombre de los actores
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="director">Director</label>
                                    <input type="text" class="form-control" id="director" name="director" placeholder="Ingrese el nombre del director" required>
                                    <div class="invalid-feedback">
                                    Ingrese el nombre del director
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="guion">Guion</label>
                                    <input type="text" class="form-control" id="guion" name="guion" placeholder="Ingrese el guion" required>
                                    <div class="invalid-feedback">
                                    Ingrese el guion de la pelicula
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="produccion">Produccion</label>
                                    <input type="text" class="form-control" id="produccion" name="produccion" placeholder="Ingrese el nombre de la produccion" required>
                                    <div class="invalid-feedback">
                                    Ingrese el nombre de la produccion
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="year">A&ntilde;o</label>
                                    <input type="text" class="form-control" id="year" name="year" placeholder="Ej: 2020" required>
                                    <div class="invalid-feedback">
                                    Ingrese el año de la pelicula
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nacion">Nacionalidad</label>
                                    <input type="text" class="form-control" id="nacion" name="nacion" placeholder="Ej: Japonesa" required>
                                    <div class="invalid-feedback">
                                    Ingrese la nacionalidad
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="genero">Genero</label>
                                        <select class="custom-select d-block w-100" id="genero" name="genero" required>
                                            <option disabled>Choose...</option>
                                            <option value="comedia">Comedia</option>
                                            <option value="terror">Terror</option>
                                            <option value="accion">Accion</option>
                                            <option value="romantica">Romantica</option>
                                            <option value="suspenso">Suspenso</option>
                                        </select>
                                    <div class="invalid-feedback">
                                        Seleccione un genero.
                                    </div>
                                </div>
                            
                                <div class="col-md-3 mb-3">
                                    <label for="minutos">Duracion</label>
                                    <input type="text" class="form-control" id="minutos" name="minutos" placeholder="Ej: 120" required><span>(Minutos)</span>
                                    <div class="invalid-feedback">
                                    Ingrese la duracion
                                    </div>
                                </div>

                                <div class="d-block col-md-3 mb-3">
                                    <label for="edad">Restricciones de edad </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edad" id="edad" value="tp">
                                        <label class="form-check-label" for="edad">Todos los publicos </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edad" id="edad" value="ms">
                                        <label class="form-check-label" for="edad">Mayor de 7 años </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edad" id="edad" value="md">
                                        <label class="form-check-label" for="edad">Mayor de 18 años </label>
                                    </div>
                                </div>
                            
                                <div class="col-md-12 mb-3"">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Ingrese la sinopsis de la pelicula" required></textarea>
                                    <div class="invalid-feedback">
                                        Debe ingresarse la sinopsis de la pelicula
                                    </div>
                                </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark btn-sm">Enviar</button>
                            <button type="submit" class="btn btn-outline-dark btn-sm">Borrar</button>    
                    </form>
                </div>
            </div>
        </div>
</main>
    <?php 
        include_once("../../../Estructura/pie.php");
    ?>