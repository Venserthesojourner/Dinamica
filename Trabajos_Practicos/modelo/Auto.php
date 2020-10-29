<?php
include_once("conexion/BaseDatos.php");
include_once("Pertenece.php");
include_once("Persona.php");

class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $propietario;
    private static $mensajedeoperacion;

    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->propietario = "";
        self::$mensajedeoperacion = "";
    }

    public function createAuto($patente,$marca,$modelo,$propietario){
        $this->setPatente($patente);
        $this->setModelo($modelo);
        $this->setMarca($marca);
        $this->setPropietario($propietario);
    }

    /**
     * Get the value of patente
     */ 
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set the value of patente
     *
     * @return  self
     */ 
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of propietario
     */ 
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set the value of propietario
     *
     * @return  self
     */ 
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }

    private static function getMensajedeoperacion()
    {
        return self::$mensajedeoperacion;
    }

    private static function setMensajedeoperacion($mensajedeoperacion)
    {
        self::$mensajedeoperacion = $mensajedeoperacion;
    }

    public function cargarPatente(){
        
    }

    public function insertDB(){
        $base = new BaseDatos();
        $resp = false;

        //Generamos la consulta:
        $consultaInsertar = "INSERT INTO auto (patente, modelo, marca) 
                             VALUES ('{$this->getPatente()}','{$this->getModelo()}','{$this->getMarca()}')";

        //Aca preguntamos si la persona que estamos referenciando existe
        $persona = $this->getPropietario();

        if ( !$persona->buscardDB( $persona->getDni() ) ){
            if ( $base-> Iniciar() ) {
                if ( $base->Ejecutar($consultaInsertar) != -1){
                        $rela = new Pertenece();
                        $rela->linkPatente( $this->getPatente, $persona->getDni());
                        if ($rela->insertDB()){
                            $resp = true;
                        } else {
                            //Mensaje si falla la vinculacion
                            self::setMensajedeoperacion("Auto->InsertDB: {$base->getError()}");
                        }                        
                } else {
                    // Mensaje si la consulta falla
                    self::setMensajedeoperacion("Auto->InsertDB: {$base->getError()}");
                }

            } else {
                // Mensaje si la conexion falla
                self::setMensajedeoperacion("Auto->InsertDB: {$base->getError()}");
            }
        } else {
            // Mensaje si la persona no existe
            self::setMensajedeoperacion('La persona que busca no existe en la BD');
        }

        return $resp;
    }

}

?>