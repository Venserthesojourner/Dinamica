<?php
$title = "Login";
$cardtitle = "Login";
include_once("../Vistas/Basicframe/header.php");
?>

<form action="#" method="post">

<div class="row">
    <div class="col-md-4" style="margin:25px">
    <div class="row"> <label class="control-label" for="archivo"><strong>Usuario</strong></label></div>
    <div class="row"> <input type="text" name="" id=""></div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</div>  
<div class="row">
    
    <div class="col-md-4" style="margin:25px">
    <div class="row">
    <label class="control-label" for="archivo"><strong>Contraseña</strong></label></div>
    <div class="row">    
    <input type="password" name="" id="">   </div> 
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</div>
<div class="row">
    
    <div class="col-md-4" style="margin:25px">
    <div class="row"> <br> </div>
    <div class="row"> <input type="submit" value="Enviar" formaction='archivosCargados.php'>
    <input type="submit" value="Registrarse" formaction='exito.php'></div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</div>  

</form>

<?php
include_once("../Vistas/Basicframe/footer.php");
?>