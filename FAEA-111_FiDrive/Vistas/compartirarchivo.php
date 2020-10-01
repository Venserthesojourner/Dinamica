<?php
$title = "COMPARTIR ARCHIVOS";
$cardtitle = "Compartir Archivo";
$tagname = "1234.png";
$tagurl = "https://laURLde_1234.png";
$taghash = "HASH PLACEHOLDER";
include_once ('../Vistas/Basicframe/header.php');
?>

<form action="exito.php" method="post">
<div class="container" style="padding:5px">
<style>
.row{
    padding: 15px;
}
</style>
<ul class="pagination" style="border-radius: 5px;">
<li class="page-item"><button class="btn btn-secondary" disabled="disabled">Nombre del Archivo:</button></li>
<li class="page-item"><button class="btn btn-outline-secondary" disabled="disabled"><?php echo $tagname ?></button></li>
</ul>
<div class="row">
<div class="col col-md-2 ">
        
</div>
<div class="col col-md-3 ">
    <button class="btn btn-outline-secondary" disabled="disabled">Dias Compartibles</button>    
</div>
<div class="col col-md-6 ">
<input type="number" name="expiration" id="expiration" default="0"><br>
<small><i>
(Si queda vació quiere decir que no expira)
</i></small>
</div>
</div>


<div class="row">
<div class="col col-md-2 ">
        
</div>
<div class="col col-md-3 ">
    <button class="btn btn-outline-secondary" disabled="disabled">Descargas Disponibles</button>    
</div>
<div class="col col-md-6 ">
<input type="number" name="numerito" id="numerito" default="0"><br>
<small><i>(Si queda vació quiere decir que no hay limites)</i> </small>
</div>
</div>

<div class="row">
<div class="col col-md-2 ">
        
</div>
<div class="col col-md-3 ">
    <button class="btn btn-outline-secondary" disabled="disabled">Cargado Por</button>    
</div>
<div class="col col-md-6 ">
<div class="form-group" style="border-radius:5px;">    
    <label for="">Administrador</label>
    <input type="radio" name="" id="">
    <label for="">Usuario</label>
    <input type="radio" name="" id="">
    <label for="">Visitante</label>    
    <input type="radio" name="" id="">
</div>
</div>
</div>

<div class="row">
<div class="col col-md-2 ">
        
</div>
<div class="col col-md-3 ">
    <button class="btn btn-outline-secondary" disabled="disabled">Protegido</button>    
</div>
<div class="col col-md-6 ">
<input type="checkbox" name="" id="">
<small><i>(Marcar si el archivo debe ser protegido con contraseña)</i></small>
</div>
</div>

<div class="row">
<div class="col col-md-2 ">
        
</div>
<div class="col col-md-3 ">
    <button class="btn btn-outline-secondary" disabled="disabled">Contraseña</button>    
</div>
<div class="col col-md-6 ">
<input type="password" name="" id="">
</div>
</div>

<div class="row">
<div class="col col-md-6">
<ul class="pagination" style="border-radius: 5px;">
<li class="page-item"><button class="btn btn-secondary" disabled="disabled">URL:</button></li>
<li class="page-item"><button class="btn btn-outline-secondary" disabled="disabled"><?php echo $tagurl ?></button></li>
</ul>
<ul class="pagination" style="border-radius: 5px;">
<li class="page-item"><button class="btn btn-secondary">Generar Hash</button></li>
<li class="page-item"><button class="btn btn-outline-secondary" disabled="disabled"><?php echo $taghash ?></button></li>
</ul>
</div>
<div class="col col-md-6 ">
    <input class="btn btn-lg btn-outline-secondary" type="reset" value="Borrar">
    <input class="btn btn-lg btn-outline-secondary" type="submit" value="Enviar">
</div>
</div>

</div>
</form>
<?php
include_once ('../Vistas/Basicframe/footer.php');
?>