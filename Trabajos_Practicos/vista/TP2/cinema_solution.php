<?php
$Titulo = "Practico II";
$subtitulo = "Cinem@s";
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
include_once("marco/head.php");
include_once("../control/realizarOperaciones.php");
include_once("../configuracion.php");


$obj = new realizarOperaciones();
$datos = data_submitted();
$rta = $obj->cinemaCard($datos);
 
?>

<div class="container" style ="background-color:rgba(159, 185, 250, 0.2); padding: 10px; float:left; color:blueviolet; margin-left: 30px; font-weight:bold;">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
<?php echo $subtitulo;?></div>
<main class="container" style ="background-color:rgba(200, 200, 200, 0.2); padding: 25px; float:left; margin-left: 30px; font-weight:bold;">
    <div class="card" style="background-color:limegreen;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        <div class="card-header" style="color:darkslateblue "><h2>La pelicula ingresada es</h2></div>
        <div class="card-body" style="color:seagreen;font-family:'Times New Roman', Times, serif"><?php echo $rta?></div>
    </div>
</main>
<div></div>
<form action="cinema_formulario.php">
	<div style="margin:30px">
  <input type="submit" class="btn btn-outline-dark" value="Volver">
  </div>
</form>
<?php
include_once ("marco/footer.php");
?>