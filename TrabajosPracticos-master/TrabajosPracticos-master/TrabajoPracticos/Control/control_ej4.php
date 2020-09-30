<?php

    class control_ej4{
        public function verInformacion ($datos){
            $nombre = $datos["nombre"];
            $apellido = $datos["apellido"];
            $edad = $datos["edad"];
            $direccion = $datos["direccion"];

            if($edad >= 18){
               $texto = "<p> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años (SOY MAYOR DE EDAD) y vivo en ".$direccion.". Oh y... </p><br>";
            } else {
                $texto =  "<p> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años (SOY MENOR DE EDAD) y vivo en ".$direccion.". Oh y... </p><br>";
            }
                
            return $texto;
                        
        }
    }

?>