<?php

class session {
    public function __construct(){
        session_start();
    }
    
    public static function cargarSession ($sessiondata){
        if (isset($_SESSION) && count($sessiondata)>0){
            foreach ($sessiondata as $tag => $data){
                $_SESSION[$tag] = $data;
            }
        } else {
        	if (!isset($_SESSION)){
            throw new Exception ('Exception: LA EXCEPCION ISSET AMEO');
            } else {
            throw new Exception ('Exception: LA EXCEPCION SESSIONDATA AMEO');
            }
        }
    }
    
    public static function cerrarSession (){
        if (isset($_SESSION)){
            session_unset();
            session_destroy();
        } else {throw new Exception ('Exception: LA EXCEPCION AMEO');}
    }
    
    public function sessionActiva (){
        return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
    }

	public function printbonito(){
		echo "<pre>";
        print_r($_SESSION);
		echo "</pre>";
	}
    
    
}

$arreglo = ["user" => "Un tipo"];
try {session::cargarSession($arreglo);}
catch (Exception $e){echo $e;}

$arreglo = array();
$session = new session();
try {$session::cargarSession($arreglo);}
catch (Exception $e){echo $e;}

$arreglo = ["usuario" => "El_lucho", "ID_Roles" => [1,3,5]];

try {$session::cargarSession($arreglo); echo "Sesion iniciada con exito"; $session->printbonito();}
catch (Exception $e){echo $e;}

$arreglo = ["correo" => "Un_correo@gmail.com", "ID_Roles" => [3,5]];

try {$session::cargarSession($arreglo); echo "Sesion Actualizada con exito"; $session->printbonito();}
catch (Exception $e){echo $e;}


