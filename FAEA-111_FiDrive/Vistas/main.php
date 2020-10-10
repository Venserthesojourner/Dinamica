<?php
$title = "Contenido";
$folder = "";
if (isset($_POST['folder'])){
    $folder = $_POST["folder"];
} else {$folder = "FILE$";}

$cardtitle = "Contenido - {$folder}";

include_once ('../Vistas/Basicframe/header.php');
$control = new operacionesControl();
$archivos = $control->obtenerArchivos($folder);

?>
<div class="row">
<div class="col-md-6">
<form action='#' method='post'>
<input type='hidden' name='IDarchivo' value=0>
<input type='hidden' name='folder' value="<?php echo $folder?>">
<button class='btn btn-success btn-block' type='submit' formmethod='post' formaction='amarchivo.php'>Agregar Archivo</button>
</form>
</div>
<div class="col-md-6">
<form action='#' method='post'>
<input type='hidden' name='name' value="<?php echo $folder?>">
<button class='btn btn-success btn-block' type='submit' formmethod='post' formaction='crearcarpeta.php'>Agregar Carpeta</button>
</form>
</div>
<hr></div>



<?php

foreach ($archivos as $archivo){
    $link = "{$folder}/{$archivo}";
    $tipe =  filetype($link);
    
    if ($tipe == 'dir'){
        echo "<div class='row' style='padding:15px; border: solid 1px black'>
        <div class='col-md-2'>
        <button class='btn btn-success' disabled>Compartido</button>
        </div>
        <div class='col-md-10'>
        <form>
        <input type='hidden' name='folder' value='{$link}'>
        <button class='btn btn-outline-secondary btn-block' type='submit' formmethod='post' formaction='main.php'>
        <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-archive' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z'/>
</svg> {$archivo} <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-archive' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' d='M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z'/>
</svg>
        </button>
        </form>
        </div>
        
        <div class='col-md-3'>
        </div>
        </div>";
    } else {
        $direccion = pathinfo($archivo);
        $id = 15263;
        $tipo = $direccion["extension"];
        $nombre = "{$direccion['filename']}.{$direccion['extension']}";    
        echo "<div class='row' style='padding:15px; border: solid 1px black'>
        <div class='col-md-2'>
        <button class='btn btn-outline-success' disabled>Compartido</button>
        </div>
        <div class='col-md-5'>
        <a class='btn btn-outline-secondary btn-block' href='{$link}'>{$archivo}</a>        
        </div>        
        <div class='col-md-5'>
        <form action='#' method='post'>
        <input type='hidden' name='IDarchivo' value='{$id}'>
        <input type='hidden' name='msg' value='{$link}'>
        <input type='hidden' name='name' value='{$nombre}'>
        <button class='btn btn-outline-secondary' type='submit' formmethod='post' formaction='amarchivo.php'>Modificar</button>
        <button class='btn btn-outline-secondary' type='submit' formmethod='post' formaction='compartirarchivo.php'>Compartir</a></button>
        <button class='btn btn-outline-secondary' type='submit' formmethod='post' formaction='eliminararchivocompartido.php'>Dejar de compartir</a></button>
        <button class='btn btn-outline-secondary' type='submit' formmethod='post' formaction='eliminararchivo.php?'>Eliminar</a></button>
        </form>
        </div>
        </div>";
    }

 } // Fin del foreach

if ($folder != "FILE$"){
    $backbtn = pathinfo($folder);
    $backbtn = $backbtn['dirname'];
    echo "<div class='row'>
    <div class='col-md-12'>
    <form action='#'>
    <input type='hidden' name='folder' value={$backbtn}>
    <button type='submit' class='btn btn-dark btn-block' formmethod='post' formaction='main.php'>Volver</button>
    </form></div>
    </div>";
}

include_once ('../Vistas/Basicframe/footer.php');
?>


