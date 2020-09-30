<?php

    class control_ej8{


        public function verInformacion ($datos){
            $age = $datos["age"];
            $estudiante = $datos["estudiante"];
                

                    if ($estudiante == "S"){
                        if( $age >= 12){
                            $texto = "<p> El precio es de 180 pesos </p>";
                        }elseif ($age < 12){
                        $texto = "<p> El precio es de 160 pesos </p>";
                        }
                    }else{
                        $texto = "<p> El precio es 300 pesos </p>";
                    }

            return $texto;
        }
    }

?>
