<?php
/*
TODO: POO Clases Abstractas 
*/
/*  
?es una clase que no se puede instanciar directamente, sino que sirve
?como una plantilla o base para otras clases. Se utiliza para definir la estructura común y los métodos
?que deben implementar las clases hijas.
*/
abstract class animal{
    abstract public function sonido();
}
class perro extends animal{
    public $nombre;
    protected $raza;
    private static $ladrar;

    public function __construct($nombre, $edad){
        $this-> nombre = $nombre;
        $this-> raza = $edad;
        self::$ladrar=$nombre;
    }
    public function sonido(){
        echo "wof";
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