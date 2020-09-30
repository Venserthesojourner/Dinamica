<?php

class control_ej5{
        public function verInformacion ($datos){
            $nombre = $datos["nombre"];
            $apellido = $datos["apellido"];
            $edad = $datos["edad"];
            $direccion = $datos["direccion"];
            $sexo = $datos["sexo"];
            $estudios = $datos["estudio"];
        
            if($sexo == "f"){
                $sex = "femenino";
            } elseif ($sexo == "m"){
                $sex = "masculino";
            } else {
                $sex = "no especificado";
            }
        
            if($estudios == "ep"){
                $study = "estudios primarios";
            } elseif ($estudios == "es"){
                $study = "estudios secundarios";
            } else{
                $study = "sin estudios";
            }
        
            
            if($edad >= 18){
                $texto = "<p> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años (SOY MAYOR DE EDAD), sexo ".$sex." y vivo en ".$direccion.". Mi nivel de estudio es: ".$study." y...</p><br>";
            } else {
                $texto = "<p> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años (SOY MENOR DE EDAD), sexo ".$sex." y vivo en ".$direccion.". Mi nivel de estudio es: ".$study." y...</p><br>";
            }
                
            return $texto;
                        
        }
    }

?>