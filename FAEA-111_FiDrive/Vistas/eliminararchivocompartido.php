<?php
$title = "DEJAR DE COMPARTIR ARCHIVOS";
$cardtitle = "Dejar de compartir Archivo";
$tagname = "1234.png";
$tagshared = 0;
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

<ul class="pagination" style="border-radius: 5px;">
<li class="page-item"><button class="btn btn-secondary" disabled="disabled">Cantidad de Veces Compartido:</button></li>
<li class="page-item"><button class="btn btn-outline-secondary" disabled="disabled"><?php echo $tagshared ?></button></li>
</ul>

Motivo
<div class="form-group">   
    <textarea name="" id="" cols="100" rows="10"></textarea>
</div>


<button class="btn btn-outline-secondary" disabled="disabled">Cargado Por</button>  
<div class="form-group" style="border-radius:5px; margin:5px">    
    <label for="">Administrador</label>
    <input type="radio" name="" id="">
    <label for="">Usuario</label>
    <input type="radio" name="" id="">
    <label for="">Visitante</label>    
    <input type="radio" name="" id="">
</div>

</div>

<input class="btn btn-lg btn-outline-secondary" type="reset" value="Borrar">
<input class="btn btn-lg btn-outline-secondary" type="submit" value="Enviar">
</form>

<?php
include_once ('../Vistas/Basicframe/footer.php');
?>