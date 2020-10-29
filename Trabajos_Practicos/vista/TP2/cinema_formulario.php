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
?>

<div class="container" style ="background-color:rgba(159, 185, 250, 0.2); padding: 10px; float:left; color:blueviolet; margin-left: 30px; font-weight:bold;">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
<?php echo $subtitulo;?></div>
<main class="container" style ="background-color:rgba(200, 200, 200, 0.2); padding: 25px; float:left; margin-left: 30px; font-weight:bold;">
    <form action="cinema_solution.php" method="post" class="needs-validation" novalidate>        
        <div class="row">
            <div class= "col-sm-4">
            <label for="Titulo">Titulo</label><br>
            <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Ingrese un Nombre">

            </div>


            <div class= "col-sm-4">
            <label for="Actores">Actores</label><br>
            <input type="text" class="form-control" name="actores" id="actores" required placeholder="Ingrese un Nombre">
            
            </div> 
        </div>

        <div class="row">
            <div class= "col-sm-4">
            <label for="Director">Director</label><br>
            <input type="text" class="form-control" name="director" id="director" required placeholder="Ingrese un Nombre">
            
            </div>

            <div class= "col-sm-4">
            <label for="Guion">Guion</label><br>
            <input type="text" class="form-control" name="guion" id="guion" required placeholder="Ingrese un Nombre">
            
            </div>       
        </div>

        <div class="row">
            <div class= "col-sm-4">
            <label for="Produccion">Produccion</label><br>
            <input type="text" class="form-control" name="produccion" id="produccion" required placeholder="Ingrese una productora">
           
            </div>

            <div class= "col-sm-4">
            <label for="Año">A&ntilde;o</label><br>
            <input type="number" class="form-control" name="anio" id="anio" required placeholder="Ingrese año">
            
            </div>
    
        </div>

        <div class="row">
            <div class= "col-sm-4">
            <label for="Nacionalidad">Nacionalidad</label><br>
            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" required placeholder="Ingrese una Nacionalidad">
            
            </div>

            <div class= "col-sm-4">
            <label for="Genero">Genero</label><br>
            <select class="form-control" name="genero" id="genero" required>
                <option value="Comedia">Comedia</option>
                <option value="Accion">Accion</option>
                <option value="Drama">Drama</option>
            </select>
        </div></div>

        <div class="row">
            <div class= "col-sm-4">
            <label for="Duracion">Duracion</label><br>
            <input type="number" class="form-control" name="duracion" id="duracion" required placeholder="Ingrese la duracion en minutos">
            
            </div>

            <div class= "col-sm-4">
            <label for="">Clasificaci&oacute;n</label><br>
            <div class="checkbox-inline">
            <input type="radio" name="clasificacion" id="clasificaciona" value="ATP"><label for="">ATP</label>
            <input type="radio" name="clasificacion" id="clasificacionb" value="Mayores de 7"><label for=""><p> Mayores de 7</p></label>
            <input type="radio" name="clasificacion" id="clasificacionc" value="Mayores de 18"><label for=""> <p> Mayores de 18</p></label>
            </div>
            </div> 
      
        </div>

        <div class="row">
 
            <div class= "col-sm-8">
            <label for="Sinopsis">Sinopsis</label><br>
            <input type="textarea" class="form-control" name="sinopsis" id="sinopsis" required placeholder="Ingrese una Sinopsis">
            
            </div>

        </div>

        <div class="row">
        <div class= "col-sm-4">
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Enviar">
        <input type="reset" class="btn btn-primary" value="Borrar">
        </div>
        </div></div>
    </form>
</main>

<script>
    bootstrapValidate('#titulo', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#titulo', 'alpha:Solo utilize letras');
    bootstrapValidate('#titulo', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#actores', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#actores', 'alpha:Solo utilize letras');
    bootstrapValidate('#actores', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#director', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#director', 'alpha:Solo utilize letras');
    bootstrapValidate('#director', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#produccion', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#produccion', 'alpha:Solo utilize letras');
    bootstrapValidate('#produccion', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#guion', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#guion', 'alpha:Solo utilize letras');
    bootstrapValidate('#guion', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#produccion', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#produccion', 'alpha:Solo utilize letras');
    bootstrapValidate('#produccion', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#anio', 'numeric:Solo utilize numeros');
    bootstrapValidate('#anio', 'max:4:El maximo son 4 caracteres');
    bootstrapValidate('#anio', 'required:Debe Ingresar al menos un nombre');
    bootstrapValidate('#nacionalidad', 'max:10:El maximo son 10 caracteres');
    bootstrapValidate('#nacionalidad', 'alpha:Solo utilize letras');
    bootstrapValidate('#nacionalidad', 'required:Debe Ingresar al menos un nombre');
</script>
<?php
include_once ("marco/footer.php");
?>