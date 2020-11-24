<?php
$title = "ALTA Y MODIFICACION DE ARCHIVOS";
$cardtitle = "Alta/Modificacion de Archivo";


include_once ('../Vistas/Basicframe/header.php');
include_once('../Control/controlBD.php');

echo controlDB::muestraCargados();

include_once ('../Vistas/Basicframe/footer.php');
?>