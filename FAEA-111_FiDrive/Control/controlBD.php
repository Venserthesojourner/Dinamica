<?php


include_once("../Modelo/BaseDatos.php");
include_once("../Modelo/estadotipos.php");
include_once("../Modelo/archivocargadoestado.php");
include_once("../Modelo/usuario.php");

/* PRUEBAS;

$var = estadotipos::eT_construct(0,0,"Testing");
$var->insertDB();

echo "Nuevo estado 'estadotipos' ID: {$var->getIdEstado()}\n";

$var2 = archivocargadoestado::aRE_construct(null,1,"Default shit",1,1);

$var2->insertDB();

echo "Nuevo estado 'archivocargadoestado' ID: {$var2->getIdarchivocargadoestado()}\n"; 

print_r(estadotipos::listarDB());


$archivis = archivocargadoestado::buscarDB('idarchivocargadoestado',6);

echo "<p>ID ARE: {$archivis->getIdarchivocargadoestado()}</p>
<p>ID ET: {$archivis->getIdestadotipos()}</p>
<p>ID USER: {$archivis->getIdusuario()}</p>
<p>DESCRIPCION: {$archivis->getAcedescripcion()}</p>
<p>ID AC: {$archivis->getIdarchivocargado()}</p>
<p>FECHA INGRESO: {$archivis->getAcefechaingreso()}</p>
<p>FECHA FINAL: {$archivis->getAcefechafin()}</p>
      ";

$fecha = (new DateTime())->format('Y-m-d H:i:s');
$param = array("idestadotipos"=>2,"acefechafin"=>"'{$fecha}'");
echo "<p>Cantidad de filas afectadas: {$archivis->actualizardDB($param)}</p>";

$archivis = archivocargadoestado::buscarDB('idarchivocargadoestado',6);

echo "<p>ID ARE: {$archivis->getIdarchivocargadoestado()}</p>
<p>ID ET: {$archivis->getIdestadotipos()}</p>
<p>ID USER: {$archivis->getIdusuario()}</p>
<p>DESCRIPCION: {$archivis->getAcedescripcion()}</p>
<p>ID AC: {$archivis->getIdarchivocargado()}</p>
<p>FECHA INGRESO: {$archivis->getAcefechaingreso()}</p>
<p>FECHA FINAL: {$archivis->getAcefechafin()}</p>
      ";

*/     

class controlDB{

    public static function userselector(){
        $block="";
        $listado = usuario::listarDB();
        foreach ($listado as $user){
            $block = $block."<option value='{$user->getUname()}'>{$user->getUname()}</option>";
        }
        return $block;
    }

}


?>
