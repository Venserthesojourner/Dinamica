<?php
class holiwis {
    public function listaDB($condicion = ""){
        $base = new BaseDatos();
        $listado = array();
        $consulta = "SELECT * FROM usuariorol";
        if ($condicion != ""){
            $consulta = "{$consulta} WHERE {$condicion}";
        }
        $consulta = "{$consulta} ORDER BY idusuario";
        if ($base->Iniciar()){
            if ($base ->Ejecutar($consulta)){                
                while ( $usurol = $base->Registro() ){

                    $usurol = $base->Registro ();
                    $usuusu = usuario::listarDB();
                    $rolrol = rol::listarDB();

                    foreach ($usurol as $urdato){
                        $usuario = usuario::U_construct($this->buscaenarreglo($usuusu,$urdato['idusuario']));
                        $rol = rol::R_construct($this->buscaenarreglo($rolrol,$urdato['idrol']));
                        //Creamos el objeto de la clase
                        $find = self::UR_construct($usuario,$rol);                    
                        array_push($listado,$find);
                    }                    
                }
            } else {
                // Mensaje de error: Fallo de Consulta
                self::setMensajeOperacion("Usuario Rol->Listar: {$base->getError()}");
            }
        } else {
            // Mensaje de error: Fallo de conexion
            self::setMensajeOperacion("Usuario Rol->Listar: {$base->getError()}");
        }
        return $listado;
    }

}
?>