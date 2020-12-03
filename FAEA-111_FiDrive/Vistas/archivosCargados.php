<?php
$title = "Carpeta Personal";
$cardtitle = "<div class='row'>
<div class='col-md-3'>Carpeta Personal</div>
<div class='col-md-4'>
<form action='#' method='get'>
<button class='btn btn-secondary' style='margin-left: auto' type='submit' formmethod='post' formaction='amarchivo.php?op=0'>Agregar Archivo</button>
</form>
</div>
<div class='col-md-5' style='display: flex;'>
<form action='#' method='get'>
<button class='btn btn-warning' style='margin-left: auto' type='submit' formmethod='post' formaction='archivosCargados.php'>Todos</button>
<button class='btn btn-success' style='margin-left: auto' type='submit' formmethod='post' formaction='archivosCargados.php?shared=compartido'>Compartido</button>
<button class='btn btn-danger' style='margin-left: auto' type='submit' formmethod='post' formaction='archivosCargados.php?shared=nocompartido'>No Compartido</button>
</form>
</div></div>";


include_once ('../Vistas/Basicframe/header.php');

/*** MENU DE ADMINISTRADOR ***/
if (controlSession::esAdmin()){
echo "
<div class='row','>
<div class='card-header bg-info' style='border: 1px solid'>
    Opciones de Administrador
</div>
<div class='col-md-3'></div>
<div class='col-md-6'>
<button class='btn btn-success'>Administrar Usuarios</button>
<button class='btn btn-warning'>Administrar Roles</button>
<button class='btn btn-danger'>Otro Boton para el Admin</button></div>
<div class='col-md-3'></div>
</div>
";
}


$condicion = "todos";
if (isset($_GET['shared'])){
    $condicion = $_GET['shared'];
}
$datos = controlDB::obtenerListaArchivos();

function muestraArchivos($condicion, $datos)
{
    //Aca deberia encontrar la condicion piolonga usando el fechaini-fechafin
    $frame = "";
    foreach ($datos as $archivo) {
        $nombre = $archivo->getACnombre();
        $desc = $archivo->getACdesc();
        $condList = $archivo->getIDarchcargado();
        $shared = controlDB::obtenerListaACE("idarchivocargado = {$condList}");
        
        if (!empty($shared)) {
            if ($condicion == "todos" || $condicion == "compartido") {
                $mark = "btn btn-success' disabled>Compartido";
                $frame .= "<form action='#' method='post'><div class='row' style='padding:15px; border: solid 1px black'>
            <div class='col-md-3'><button class='{$mark}</button><button class='btn btn-outline-secondary' disabled>{$nombre}</button></div>
            <div class='col-md-5'><p>{$desc}</p></div>
            <div class='col-md-4' style='height:100px;'>
            <button class='btn btn-outline-secondary' type='submit' style='margin-left: auto; margin-right: 0' formmethod='post' formaction='amarchivo.php?op=1&id={$condList}'>Modificar</button>                
            <button class='btn btn-outline-secondary' type='submit' style='margin-left: auto; margin-right: 0' formmethod='post' formaction='eliminararchivocompartido.php'>Dejar de compartir</a></button>
            <button class='btn btn-outline-secondary' type='submit' style='margin-left: auto; margin-right: 0' formmethod='post' formaction='eliminararchivo.php?'>Eliminar</a></button></form></div></div>";
            }
        } else {
            
            if ($condicion == "todos" || $condicion == "nocompartido") {
                $mark = "btn btn-danger' disabled>No Compartido";
                //$mini = crearMiniatura($nombre); <div class='row'>{$mini}</div>
                $frame .= "<form action='#' method='post'><div class='row' style='padding:15px; border: solid 1px black'>
            <div class='col-md-3'><button class='{$mark}</button><button class='btn btn-outline-secondary' disabled>{$nombre}</button>
            </div>
            <div class='col-md-5'><p>{$desc}</p></div>
            <div class='col-md-4' style='height:100px;'>
            <button class='btn btn-outline-secondary' type='submit' style='margin-left: auto; margin-right: 0' formmethod='post' formaction='amarchivo.php?op=1&id={$condList}'>Modificar</button>
            <button class='btn btn-outline-secondary' type='submit' style='margin-left: auto; margin-right: 0' formmethod='post' formaction='compartirarchivo.php'>Compartir</a></button>            
            <button class='btn btn-outline-secondary' type='submit' style='margin-left: auto; margin-right: 0' formmethod='post' formaction='eliminararchivo.php?'>Eliminar</a></button></form></div></div>";
            }
        }
    }

    return $frame;
}


echo muestraArchivos($condicion, $datos);

include_once ('../Vistas/Basicframe/footer.php');

?>

