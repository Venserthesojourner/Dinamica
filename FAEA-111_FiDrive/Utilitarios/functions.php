<?php 

function data_submitted() {
	$_AAux= array();
    if (!empty($_POST)) 
    	$_AAux =$_POST;
    else 
		if(!empty($_GET)) {
            $_AAux =$_GET;
		}
	if (count($_AAux)){
		foreach ($_AAux as $indice => $valor) {
				if ($valor=="")
                	$_AAux[$indice] = 'null'	;
			}
	}
	return $_AAux;

}


spl_autoload_register(function ($clase) {
	echo "Cargamos la clase  ".$clase."<br>" ;
	$directorys = array(
		$GLOBALS['ROOT'].'Modelo/',
		$GLOBALS['ROOT'].'Control/',
		$GLOBALS['ROOT'].'Utilitarios/',
		$GLOBALS['ROOT'].'Vistas/',
	);
   print_r($directorys);
	foreach($directorys as $directory){
	  if(file_exists($directory.$clase . '.php')){  
			  // echo "se incluyo".$directory.$class_name . '.php';
			require_once($directory.$clase . '.php');
			return;
		}           
	}

   
});

function hiddenData($action){
	if (isset($_POST["IDarchivo"])){		
		$action = $_POST["IDarchivo"];
		return $action;
	} else {	
		$action = 0;
		return $action;
	}
}

function verEstructura($e){
	echo "<pre>";
	print_r($e);
	echo "</pre>"; 
}

function userselector($listado){
	$block="";         
	foreach ($listado as $user){
		$valor = $user->getIduser();
		$tag = $user->getUname();
		$block .= "<option value='{$valor}'>{$tag}</option>";
	}
	return $block;
}

/* function crearMiniatura($nombreArchivo)
{

	$finalWidth    = 100;
	$dirFullImage  = 'Vistas/FILE$/';
	$dirThumbImage = 'imagenes/thumbs/';
	//$tmpName       = $_FILES['imagen']['tmp_name'];
	//$finalName     = $dirFullImage . $_FILES['imagen']['name'];


	//copiarImagen($_FILES['imagen']['tmp_name'], $dirFullImage . $_FILES['imagen']['name']);

	$im = null;
	if (preg_match('/[.](jpg)$/', $nombreArchivo)) {
		$im = imagecreatefromjpeg($dirFullImage . $nombreArchivo);
	} else if (preg_match('/[.](gif)$/', $nombreArchivo)) {
		$im = imagecreatefromgif($dirFullImage . $nombreArchivo);
	} else if (preg_match('/[.](png)$/', $nombreArchivo)) {
		$im = imagecreatefrompng($dirFullImage . $nombreArchivo);
	}
	$width = imagesx($im);
	$height = imagesy($im);

	$miniWidth = $finalWidth;
	$miniHeight = floor($height * ($finalWidth / $width));

	$imageTrueColor = imagecreatetruecolor($miniWidth, $miniHeight);

	imagecopyresized($imageTrueColor, $im, 0, 0, 0, 0, $miniWidth, $miniHeight, $width, $height);

	if (!file_exists($dirThumbImage)) {
		if (!mkdir($dirThumbImage)) {
			die("Hubo un problema! vuélvelo a intentar");
		}
	}

	imagejpeg($imageTrueColor, $dirThumbImage . $nombreArchivo);
	$html = '<img src="' . $dirThumbImage . $nombreArchivo . '" alt="image" />';
	$html .= '<br />Tu imagen ha sido creada exitosamente';
	echo $html;
} */

?>
