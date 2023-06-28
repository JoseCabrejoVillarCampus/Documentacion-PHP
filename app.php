<?php
/*
TODO: POO Herencia 
*/
/*  
?permite crear nuevas clases basadas en clases
?existentes, aprovechando y extendiendo su funcionalidad
*/
class perro{
    public $nombre;
    protected $raza;
    private static $ladrar;

    public function __construct($nombre, $edad){
        $this-> nombre = $nombre;
        $this-> raza = $edad;
        self::$ladrar=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre= $nombre;
    }
    public function getRaza(){
        return $this->raza;
    }
    public function setRaza($raza){
        $this->raza=$raza;
    }
    public function ladrar(){
        return 'wof wof'.self::$ladrar.$this->nombre;
    }
}
class canino extends perro{
    public function ladrar(){
        return 'wof wof, te ladra'.$this->nombre;
    }
}