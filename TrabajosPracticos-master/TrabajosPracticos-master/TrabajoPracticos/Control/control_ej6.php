<?php

class control_ej6{
        public function verInformacion ($datos){
            $nombre = $datos["nombre"];
            $apellido = $datos["apellido"];
            $edad = $datos["edad"];
            $address = $datos["address"];
            $sexo = $datos["sexo"];
            $estudios = $datos["estudio"];
            $deportes = $datos["deporte"];
    
            // verificacion de sexo
            if($sexo == "f"){
                $sex = "femenino";
            } elseif ($sexo == "m"){
                $sex = "masculino";
            } else {
                $sex = "no especificado";
            }
            //verificacion de estudios
            if($estudios == "ep"){
                $study = "estudios primarios";
            } elseif ($estudios == "es"){
                $study = "estudios secundarios";
            } else{
                $study = "sin estudios";
            }
    
            //verificacion de deporte
            // realizando una sumatoria
            $sumatoria = 0;
            for($i=0;$i < count($deportes);$i++){
                $sumatoria = $sumatoria + 1;
            }
    
            
            if($edad >= 18){
                $texto = "<p> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años (SOY MAYOR DE EDAD), sexo ".$sex." y vivo en ".$address.". Mi nivel de estudio es: ".$study." y practico ".$sumatoria." deportes. </p><br>";
            } else {
                $texto =  "<p> Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años (SOY MENOR DE EDAD), sexo ".$sex." y vivo en ".$address.". Mi nivel de estudio es: ".$study." y practico ".$sumatoria." deportes.</p><br>";
            }
                
            return $texto;
                        
        }
    }

?>