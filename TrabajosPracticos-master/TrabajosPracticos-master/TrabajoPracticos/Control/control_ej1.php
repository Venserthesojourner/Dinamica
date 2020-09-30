<?php

    class control_ej1{
        public function verInformacion ($datos){
            $num = $datos["numero"];
            if($num == 0){
                $texto = "<p>El numero ingresado es cero.</p><br>";
            } elseif ($num%2 == 1){
                $texto =  "<p>El numero ingresado es negativo.</p>";
            } elseif ($num%2 == 0){
                $texto =  "<p>El numero ingresado es positivo.</p>";
            } else {
                $texto =  "<p>El Valor ingresado no es valido.</p>";
            }
           return $texto;
                        
        }
    }

?>