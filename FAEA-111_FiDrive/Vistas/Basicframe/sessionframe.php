<?php
include_once("../config.php");
include_once("../Control/controlSession.php");
include_once("../Control/operacionesControl.php");
include_once("../Control/controlBD.php");
date_default_timezone_set ( "America/Argentina/San_Luis" );

$nombre = $_POST['usuario'] = "Luigi";

$sesionactual = controlSession::iniciarVariableSession();
$usuario = controlDB::encuentraUsuario("usnombre","'$nombre'");

$datosSession = ["usuario" => $usuario->getUname(), "listaroles"=>["Administrador","Veterano", "Premium"]];
controlSession::cargarDatosSession($datosSession,$sesionactual);

$usuario = $_SESSION['usuario'];
$roles = $_SESSION['listaroles'];

//