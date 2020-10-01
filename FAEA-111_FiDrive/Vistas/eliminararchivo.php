<?php
$title = "ELIMINAR ARCHIVOS";
$cardtitle = "Eliminar Archivo";
$tagname = "1234.png";
$choclodetexto = "";
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

Motivo
<div class="form-group">   
    <textarea name="reas" id="reas" cols="100" rows="10"><?php echo $choclodetexto;?></textarea>
</div>


<button class="btn btn-outline-secondary" disabled="disabled">Cargado Por</button>  
<div class="form-group" style="border-radius:5px; margin:5px">    
    <label for="admin">Administrador</label>
    <input type="radio" name="usr" id="admin" value=1>
    <label for="user">Usuario</label>
    <input type="radio" name="usr" id="user" value=2>
    <label for="invi">Visitante</label>    
    <input type="radio" name="usr" id="invi" value=3>
</div>


</div>

<input class="btn btn-lg btn-outline-secondary" type="reset" value="Borrar">
<input class="btn btn-lg btn-outline-secondary" type="submit" value="Enviar">
</form>

<?php
include_once ('../Vistas/Basicframe/footer.php');
?>