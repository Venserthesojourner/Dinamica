<?php

    class control_ej7{
        public function verInformacion ($datos){
            $v1 = $datos["valor1"];
            $v2 = $datos["valor2"];
            $op = $datos["op"];
                
                if ($op == "suma"){
                    $res = $v1 + $v2;
                        $texto = "<h1> EL VALOR DE SUMAR ".$v1." + ".$v2." ES = ".$res." </h1>";
                            }elseif ($op == "resta"){
                                $res = $v1 - $v2;
                                $texto = "<h1> EL VALOR DE RESTAR ".$v1." - ".$v2." ES = ".$res." </h1>";
                                }elseif ($op == "multiplicacion"){
                                    $res = $v1 * $v2;
                                    $texto = "<h1> EL VALOR DE MULTIPLICAR ".$v1." * ".$v2." ES = ".$res." </h1>";
                                        }elseif ($op == "division"){
                                            $res = $v1 / $v2;
                                            $texto = "<h1> EL VALOR DE DIVIDIR ".$v1." / ".$v2." ES = ".$res." </h1>";
                                                }elseif ($op == "modulo"){
                                                    $res = $v1 % $v2;
                                                    $texto = "<h1> EL MODULO DE ".$v1." % ".$v2." ES = ".$res." </h1>";
                                                        } else {
                                                            $texto = "<h1> LOS VALORES INGRESADOS NO SON VALIDOS, verifique que haya ingresado dos numeros y haya seleccionado una operacion correcta. </h1>";
                                                        }
                        
                        
           return $texto;
                        
        }
    }

?>