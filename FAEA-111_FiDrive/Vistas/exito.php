<?php
$title = "EXITO";
$cardtitle = "";
$tagname = "1234.png";
include_once ('../Vistas/Basicframe/header.php');

$obj = new operacionesControl();
$datos = data_submitted();
if ($datos['IDarchivo'] == 0){
    $obj->subirArchivo($datos);
}



?>
<div class="row">
    <div class="col col-md-3"></div>
    <div class="col col-md-6"><a href="main.php"><img src="https://i.gyazo.com/ae056d08d539cfab708d2573d758fa9b.png" alt="exito"></a></div>
    <div class="col col-md-3"></div>
</div>
<?php
include_once ('../Vistas/Basicframe/footer.php');
?>