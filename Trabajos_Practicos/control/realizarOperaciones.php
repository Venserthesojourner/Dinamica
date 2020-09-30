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
		$arreglo = $datos["semana"];
	}
}

?>