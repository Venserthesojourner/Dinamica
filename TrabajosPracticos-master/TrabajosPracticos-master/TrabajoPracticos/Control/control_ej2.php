<?php

    class control_ej2{
        public function verInformacion ($datos){
            $array = $datos["Array"];
            $sumatoria = 0;
            for($i = 0;$i < count($array);$i++){
                $sumatoria = $sumatoria + $array[$i];
            }

            $texto = "<p> El total de horas a la semana que hay de clases es de: ".$sumatoria." hrs </p><br>";
           
            return $texto;
                        
        }
    }

?>