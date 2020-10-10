
<?php
class operacionesControl {
    public function obtenerArchivos($folder)
    {
        $directorio = "{$folder}";
        
        $archivos = [];
        $archivos = array_diff(scandir($directorio,SCANDIR_SORT_NONE), array('..', '.'));
        $files = [];
        $folders = [];
        foreach ($archivos as $archivo){
            
            if (strpos($archivo, ".") === false){
                array_push($folders, $archivo);
            } else {
                array_push($files, $archivo);
            }
        }
        $archivos = array_merge($folders,$files);
        
        return $archivos;
    }

    public function crearDirectorio(){
        $base = $_POST['name'];
        $folder = $_POST['foldername'];
        mkdir ("{$base}/{$folder}", 0777, true);
        header('Location: main.php');
    }

    public function subirArchivo($datos){
        print_r($datos);
        print_r($_FILES);

        $target_dir = $datos['folder'];
        $target_file = $target_dir . basename($datos['archive']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($datos["archive"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
    }
        
}

?>