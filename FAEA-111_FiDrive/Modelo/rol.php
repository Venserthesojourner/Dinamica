<?php

class rol {
    private int $idrol;
    private string $roldesc;
    private static string $mensajeoperacion;

    public function __construct(){
        $this->idrol = 0;
        $this->roldesc = "";
        self::$mensajeoperacion = "";
    }

    public function getIDrol(){ return $this->idrol; }
    public function getRoldesc(){ return $this->roldesc; }

    public static function getMensajeOperacion(){}
}