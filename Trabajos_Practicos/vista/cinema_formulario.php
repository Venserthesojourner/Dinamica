<?php

$Titulo = "Cinem@s";
$enunciado = "Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras. 
Aplicar Bootstrap y validar los siguiente:
- El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
aceptar números.
- El campo duración debe permitir un máximo de 3 números.
- Todos los datos son obligatorios
- Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
formulario.
- El botón “Borrar” debe limpiar el formulario.";
$patita = "Cañete Luis Miguel";
include_once("configuracion.php");
include_once("vista/marco/head.php");
?>

<div class="container" style ="background-color:rgba(159, 185, 250, 0.2); padding: 10px; float:left; color:blueviolet; margin-left: 30px; font-weight:bold;">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
<?php echo $Titulo;?></div>
<main class="container" style ="background-color:rgba(200, 200, 200, 0.2); padding: 25px; float:left; margin-left: 30px; font-weight:bold;">
    <form action="">
        
        <div class="row">
            <div class= "col-sm-4">
            <label for="">Titulo</label><br>
            <input type="text">
            </div>
            <div class= "col-sm-4">
            <label for="">Actores</label><br><input type="text">
            </div>        
        </div>
        <div class="row">
            <div class= "col-sm-4">
            <label for="">Director</label><br><input type="text">
            </div>
            <div class= "col-sm-4">
            <label for="">Guion</label><br><input type="text">
            </div>        
        </div>
        <div class="row">
            <div class= "col-sm-4">
            <label for="">Producci&oacute;n</label><br><input type="text">
            </div>
            <div class= "col-sm-4">
            <label for="">A&ntilde;o</label><br><input type="text">
            </div>        
        </div>
        <div class="row">
            <div class= "col-sm-4">
            <label for="">Nacionalidad</label><br><input type="text">
            </div>
            <div class= "col-sm-4">
            <label for="">Genero</label><br>
            <select name="" id="">
                <option value="">Comedia</option>
                <option value="">Accion</option>
                <option value="">Drama</option>
            </select>
            </div>        
        </div>
        <div class="row">
            <div class= "col-sm-4">
            <label for="">Duraci&oacute;n</label><br><input type="text">
            </div>
            <div class= "col-sm-4">
            <label for="">Clasificaci&oacute;n</label><br>
            <input type="radio" name="" id="" value="ATP"><label for=""><p>ATP</p> </label>
            <input type="radio" name="" id="" value="Mayores de 7"><label for=""><p>Mayores de 7</p></label>
            <input type="radio" name="" id="" value="Mayores de 18"><label for=""> <p>Mayores de 18</p></label>
            </div>        
        </div>
        <div class="row">
            <div class= "col-sm-4">
            <label for="">Sinopsis</label><br>
            <input type="textarea" name="" id="">
            </div>
        </div>
        <div class="botonera">
        <input type="button" class="btn btn-primary" value="Enviar">
        <input type="button" class="btn btn-primary" value="Borrar">
        </div>
    </form>
</main>
<?php
include_once ("vista/marco/footer.php");
?>