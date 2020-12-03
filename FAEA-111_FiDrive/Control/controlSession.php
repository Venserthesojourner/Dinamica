<?php
include_once("../Modelo/session.php");
class controlSession{
    public static function iniciarVariableSession() : session
    {
        return new session();
    }

    public static function cargarDatosSession ($parametros, $sesionactual){
        $sesionactual::cargarSession ($parametros);
    }

    public function cerrarSession ($sesionactual){
        $sesionactual::cerrarSession();
        header('Location: login.php');
    }

    public static function esAdmin(){
        $respuesta = false;
        foreach ($_SESSION['listaroles'] as $rol){
            if ($rol == "Administrador"){$respuesta = true;}
        }
        return $respuesta;
    }

}