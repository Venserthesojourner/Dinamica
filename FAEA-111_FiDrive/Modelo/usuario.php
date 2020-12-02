<?php
class usuario{
    private $idUser;
    private $uName;
    private $uApellido;
    private $uLogin;
    private $uPassword;
    private $uActivo;
    private static $mensajedeoperacion;

    public function __construct(){
        $this->idUser = 0;
        $this->uName = "";
        $this->uApellido = "";
        $this->uLogin = "";
        $this->uPassword = "";
        $this->uActivo = 1;
        self::$mensajedeoperacion = "";
    }

    public static function U_construct($param){
        $obj = new usuario();
        $obj->setIduser($param['idusuario']);
        $obj->setUname($param['usnombre']);
        $obj->setUapellido($param['usapellido']);
        $obj->setUlogin($param['uslogin']);
        $obj->setUpassword($param['usclave']);
        return $obj;
    }

    public function getIduser(){return $this->idUser;}
    public function getUname(){return $this->uName;}
    public function getUapellido(){return $this->uApellido;}
    public function getUlogin(){return $this->uLogin;}
    public function getUpassword(){return $this->uPassword;}
    public function getUactivo(){return $this->uActivo;}
    public static function getmensajedeoperacion(){return self::$mensajedeoperacion;}

    public function setIduser($idUser){$this->idUser = $idUser;}
    public function setUname($uName){$this->uName = $uName;}
    public function setUapellido($uApellido){$this->uApellido = $uApellido;}
    public function setUlogin($uLogin){$this->uLogin = $uLogin;}
    public function setUpassword($uPassword){$this->uPassword = $uPassword;}
    public function setUactivo($uActivo){$this->uActivo = $uActivo;}
    public static function setMensajedeOperacion($msj){self::$mensajedeoperacion = $msj;}


        /* Metodos SQL*/
    public function insertDB(){
        $base = new BaseDatos();
        $resp = false;

        $consulta = "INSERT INTO usuario (usnombre,usapellidp,uslogin,usclave,usactivo) 
        VALUES ('{$this->getUname()}','{$this->getUapellido()}','{$this->getUlogin()}','{$this->getUpassword()}',{$this->getUactivo()})";

        if ($base->Iniciar()){

            $sqlresponse = $base->Ejecutar($consulta);

            if ( $sqlresponse != -1){
                // Como la operacion fue exitosa obtuvimos el id del estado.
                $this->setIduser($sqlresponse);
                $resp = true;

            } else {
                // Mensaje de error: Fallo de Consulta
                self::setMensajedeOperacion("Estado Tipos->Insertar: {$base->getError()}");
            }


        } else {
            // Mensaje de error: Fallo de conexion
            self::setMensajedeOperacion("Estado Tipos->Insertar: {$base->getError()}");
        }

        return $resp;
    }

    public static function listarDB ($condicion = ""){
        $base = new BaseDatos();
        $listado = array();

        /*Generamos la consulta correspondiente*/
        $consulta = "SELECT * FROM usuario";
        if ($condicion != ""){
            $consulta = "{$consulta} WHERE {$condicion}";
        }
        $consulta = "{$consulta} ORDER BY idusuario";

        if ($base->Iniciar()){

            if ($base ->Ejecutar($consulta)){
                
                while ( $row2 = $base->Registro() ){                

                    //Creamos el objeto de la clase
                    $newOBJET = self::U_construct($row2);
                    array_push($listado,$newOBJET);
                }

            } else {
                // Mensaje de error: Fallo de Consulta
                self::setMensajedeOperacion("Estado Tipos->Listar: {$base->getError()}");
            }
        } else {
            // Mensaje de error: Fallo de conexion
            self::setMensajedeOperacion("Estado Tipos->Listar: {$base->getError()}");
        }

        return $listado;

    }

    public static function buscarDB ($campo, $parametro){
        $base = new BaseDatos ();
        $consulta = "SELECT * FROM usuario WHERE {$campo} = {$parametro}";

       
        $find = null;
        
        if ($base->Iniciar()){
            if ($base->Ejecutar ( $consulta )) {
                $row2 = $base->Registro ();
                //Creamos el objeto de la clase
                $find = self::U_construct($row2);
            } else {
                // Mensaje de error: Fallo de busqueda
                self::setMensajedeOperacion("Estado Tipos->Buscar - FB: {$base->getError()}");
            }
        } else {
            // Mensaje de error: Fallo de conexion
            self::setMensajedeOperacion("Estado Tipos->Buscar - FL: {$base->getError()}");
        }

        return $find;
    }

    public function actualizardDB ($parametros){
        $resp = 0;
        $base = new BaseDatos();
        $ref = $this->getIduser();
        if ($base->Iniciar()){
            foreach ($parametros as $clave => $parametro){
            $consulta = "UPDATE usuario SET {$clave}={$parametro} WHERE idusuario = {$ref}";
            echo $consulta;
            if ($base->Ejecutar ( $consulta )) {
                $resp++;
            } else {
                //Mensaje de Error: Fallo de Conexion
                self::setMensajedeOperacion("Estado Tipo-> Actualizar-FL: {$base->getError()}");
            }
            }

        } else {
            //Mensaje de Error: Fallo de Conexion
            self::setMensajedeOperacion("Estado Tipo-> Actualizar-FL: {$base->getError()}");
        }
        return $resp;
    }
}

?>