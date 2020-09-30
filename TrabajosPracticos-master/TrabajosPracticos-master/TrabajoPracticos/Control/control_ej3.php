<?php

    class control_ej3{
        public function verInformacion ($datos){
            $nombre = $datos["nombre"];
            $apellido = $datos["apellido"];
            $edad = $datos["edad"];
            $direccion = $datos["direccion"];

            $texto = "<h2> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".</h2><br>";
                
            return $texto;
                        
        }
    }

?>