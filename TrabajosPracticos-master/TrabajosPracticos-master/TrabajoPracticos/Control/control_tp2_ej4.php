<?php

    class control_tp2_ej4{


        public function verInformacion ($datos){
            $titulo = $datos["titulo"];
            $actors = $datos["actores"];
            $director = $datos["director"];
            $guion = $datos["guion"];
            $produccion = $datos["produccion"];
            $year = $datos["year"];
            $nacion = $datos["nacion"];
            $genero = $datos["genero"];
            $minutos = $datos["minutos"];
            $edad = $datos["edad"];
            $sinopsis = $datos["sinopsis"];
            
            if($edad == "md"){
                $rEdad = "Mayores de 18 A&ntilde;os";
            } elseif($edad == "ms"){
                $rEdad = "Mayores de 7 A&ntilde;os";
            } else {
                $rEdad = "Apta para todo publico";
            }

            $texto = "<p><h1> La pelicula introducida es </h1> <br>
                              <b>Titulo:</b> $titulo <br>
                              <b>Actores:</b> $actors <br>
                              <b>Director:</b> $director <br>
                              <b>Guion:</b> $guion <br>
                              <b>Produccion:</b> $produccion <br>
                              <b>A&ntilde;o:</b> $year <br>
                              <b>Nacionalidad:</b> $nacion <br>
                              <b>Genero:</b> $genero <br>
                              <b>Duracion:</b> $minutos Minutos<br>
                              <b>Restricciones de edad:</b> $rEdad <br>            
                            </p>";
            return $texto;
        }
    }   


?>