<?php

class archivocargadoestado {
    private $idarchivocargadoestado; // Int
    private $idestadotipos; // Int
    private $acedescripcion; // String
    private $idusuario; // Int
    private $acefechaingreso; // DATE
    private $acefechafin; // DATE
    private $idarchivocargado; // Int
    private static $mensajedeoperacion;

    public function __construct()
    {
        $this->idarchivocargadoestado = 0;
        $this->idestadotipos = 0;
        $this->acedescripcion = "";
        $this->idusuario = 0;
        $this->acefechaingreso = (new DateTime())->format('Y-m-d H:i:s');
        
        $this->acefechafin = 'null';
        $this->idarchivocargado = 0;
        self::$mensajedeoperacion = "";
    }

    public static function aRE_construct($idARE,$idET,$AceD,$iduser,$idAC){
        $obj = new archivocargadoestado();
        $obj->setIdarchivocargadoestado($idARE);
        $obj->setIdestadotipos($idET);
        $obj->setAcedescripcion($AceD);
        $obj->setIdusuario($iduser);
        $obj->setIdarchivocargado($idAC);
        return $obj;
    }

    public function getIdarchivocargadoestado(){return $this->idarchivocargadoestado;}
    public function getIdestadotipos(){return $this->idestadotipos;}
    public function getAcedescripcion(){return $this->acedescripcion;}
    public function getIdusuario(){return $this->idusuario;}
    public function getAcefechaingreso(){return $this->acefechaingreso;}
    public function getAcefechafin(){return $this->acefechafin;}
    public function getIdarchivocargado(){return $this->idarchivocargado;}

    public static function getMensajeoperacion (){return self::$mensajedeoperacion;}

    public function setIdarchivocargadoestado($idarchivocargadoestado){$this->idarchivocargadoestado = $idarchivocargadoestado;}
    public function setIdestadotipos($idestadotipos){$this->idestadotipos = $idestadotipos;}
    public function setAcedescripcion($acedescripcion){$this->acedescripcion = $acedescripcion;}
    public function setIdusuario($idusuario){$this->idusuario = $idusuario;}
    public function setAcefechaingreso($acefechaingreso){$this->acefechaingreso = $acefechaingreso;}
    public function setAcefechafin($acefechafin){$this->acefechafin = $acefechafin;}
    public function setIdarchivocargado($idarchivocargado){$this->idarchivocargado = $idarchivocargado;}

    public static function setMensajeoperacion ($mensaje){self::$mensajedeoperacion = $mensaje;}

    public function insertarDB (){
        $base = new BaseDatos();
        $resp = false;

        $consulta = "INSERT INTO archivocargadoestado 
        (idestadotipos, acedescripcion, idusuario, acefechaingreso, idarchivocargado)
        VALUES
        ({$this->getIdestadotipos()},'{$this->getAcedescripcion()}',{$this->getIdusuario()},'{$this->getAcefechaingreso()}',{$this->getIdarchivocargado()})";


        if ($base->Iniciar()){

            $id = $base->Ejecutar($consulta);

            if ($id <> -1){

                $this->setIdarchivocargadoestado($id);
                $resp = true;

            } else {
                // Mensaje de error: Fallo de Consulta
                self::setMensajeoperacion("Archivo Cargado Estado -> Insertar: {$base->getError()}");
            }

        } else {
            // Mensaje de error: Fallo de Conexion
            self::setMensajeoperacion("Archivo Cargado Estado -> Insertar: {$base->getError()}");
        }

        return $resp;
    }

    public static function listarDB ($condicion = ""){
        $base = new BaseDatos();
        $listado = array();

        /*Generamos la consulta correspondiente*/
        $consulta = "SELECT * FROM archivocargadoestado";
        if ($condicion != ""){
            $consulta = "{$consulta} WHERE {$condicion}";
        }
        $consulta = "{$consulta} ORDER BY idarchivocargadoestado";

        if ($base->Iniciar()){

            if ($base ->Ejecutar($consulta)){
                
                while ( $row2 = $base->Registro() ){

                    $idARE = $row2['idestadotipos'];
                    $idET = $row2['etdescripcion'];
                    $AceD = $row2['etactivo'];
                    $iduser = $row2['etactivo'];
                    $idAC = $row2['etactivo'];

                    //Creamos el objeto de la clase
                    $newOBJET = self::aRE_construct($idARE,$idET,$AceD,$iduser,$idAC);
                    $newOBJET->setIdarchivocargadoestado($row2['idestadotipos']);
                    $newOBJET->setAcefechaingreso($row2['idestadotipos']);
                    $newOBJET->setAcefechafin($row2['idestadotipos']);
                    array_push($listado,$newOBJET);
                }

            } else {
                // Mensaje de error: Fallo de Consulta
                self::setMensajeOperacion("Estado Tipos->Listar: {$base->getError()}");
            }
        } else {
            // Mensaje de error: Fallo de conexion
            self::setMensajeOperacion("Estado Tipos->Listar: {$base->getError()}");
        }

        return $listado;

    }

    public static function buscarDB ($campo, $parametro){
        $base = new BaseDatos ();
        $consulta = "SELECT * FROM archivocargadoestado WHERE {$campo} = {$parametro}";
        $find = null;
        
        if ($base->Iniciar()){
            if ($base->Ejecutar ( $consulta )) {
                $row2 = $base->Registro ();
                $idARE = $row2['idarchivocargadoestado'];
                $idET = $row2['idestadotipos'];
                $AceD = $row2['acedescripcion'];
                $iduser = $row2['idusuario'];
                $idAC = $row2['idarchivocargado'];

                //Creamos el objeto de la clase
                $find = self::aRE_construct($idARE,$idET,$AceD,$iduser,$idAC);
                $find->setAcefechaingreso($row2['acefechaingreso']);
                $find->setAcefechafin($row2['acefechafin']);
            } else {
                // Mensaje de error: Fallo de busqueda
                self::setMensajeOperacion("Estado Tipos->Buscar - FB: {$base->getError()}");
            }
        } else {
            // Mensaje de error: Fallo de conexion
            self::setMensajeOperacion("Estado Tipos->Buscar - FL: {$base->getError()}");
        }

        return $find;
    }

    public function actualizardDB ($parametros){
        $resp = 0;
        $base = new BaseDatos();
        $ref = $this->getIdarchivocargadoestado();
        if ($base->Iniciar()){
            foreach ($parametros as $clave => $parametro){
            $consulta = "UPDATE archivocargadoestado SET {$clave}={$parametro} WHERE idarchivocargadoestado = {$ref}";
            echo $consulta;
            if ($base->Ejecutar ( $consulta )) {
                $resp++;
            } else {
                //Mensaje de Error: Fallo de Conexion
                self::setMensajeoperacion("Estado Tipo-> Actualizar-FL: {$base->getError()}");
            }
            }

        } else {
            //Mensaje de Error: Fallo de Conexion
            self::setMensajeoperacion("Estado Tipo-> Actualizar-FL: {$base->getError()}");
        }
        return $resp;
    }
}
?>