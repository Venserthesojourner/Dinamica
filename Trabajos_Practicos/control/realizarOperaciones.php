<?php
class realizarOperaciones {
    public function operar($datos){
        $operando1 = $datos['1erfactor'];
	    $operando2 = $datos['2dofactor'];
	    $operador = $datos['operaciones'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
    $resultado =  "La solución de ".$operando1.$operador.$operando2." es: ".$solucion;
    return $resultado;
	}
	
	public function precioFinal($datos){
		$edad = $datos["edad"];
		$rol = $datos["rol"];
			$precio = 300;
		if ($rol == 1){
    		if ($edad >=12){
        		$precio = 180;
    		} else {
        	$precio = 160;
    		}
		}
		return $precio;
	}

	public function vernumero($datos){
		$numero = $datos["number"];
		if ($numero == 0){
			return "El Numero es CERO";
		} else if ($numero > 0) {
			return "El numero es POSITIVO";
		} else {
			return "El numero es NEGATIVO";
		}
	}

	public function sumaHoras($datos){
		
		$rta = 0;
		$arreglo = $datos["semana"];
		foreach ($arreglo as $valor){
			$rta = $rta + $valor;
		}
		
		return $rta;
	}

	public function crearCard($datos){
		return "Hola, yo soy {$datos["nombre"]}, {$datos["apellido"]} tengo {$datos["edad"]} años y vivo en {$datos["direccion"]}";
	}

	public function mensajeEdad($datos){
		if ($datos["edad"]<18){
			return "Es menor de 18";
		} else if ($datos["edad"]==18){
			return "Tiene exactamente 18";
		} else {
			return "Es mayor de 18";
		}
	}

	public function sexoYestudio($datos){
		return "El sexo es {$datos["sexo"]}, y poseo {$datos["estudio"]}";
	}

	public function haceDeportes($datos){
		return count($datos["deporte"]) - 1;
	}

	public function cinemaCard($datos){
		return "<b>Titulo:</b>{$datos["titulo"]}<br>
		<b>Actores:</b> {$datos["actores"]}<br>
		<b>Director:</b>{$datos["director"]}<br>
		<b>Guion:</b> {$datos["guion"]} <br>
		<b>Produccion:</b>{$datos["produccion"]}<br> 
		<b>Año:</b> {$datos["anio"]}<br> 
		<b>Nacionalidad:</b>{$datos["nacionalidad"]} <br>
		<b>Genero:</b>{$datos["genero"]}<br>
		<b>Duracion:</b>{$datos["duracion"]} <br>
		<b>Restriccion de Edad:</b> {$datos["clasificacion"]}<br>
		<b>Sinopsis:</b> {$datos["sinopsis"]}<br>
				";
	}
}

?>