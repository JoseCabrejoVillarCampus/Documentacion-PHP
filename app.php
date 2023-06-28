<?php
/*
TODO: POO Metodos estaticos 
*/
/*  
?un método estático es un método que pertenece a la clase en sí y no a una
?instancia específica de la clase. A diferencia de los métodos de instancia, los métodos estáticos se
?pueden llamar directamente en la clase sin necesidad de crear un objeto o instancia de la misma.
*/
class perro{
    private $nombre;
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
        echo 'wof wof'.self::$ladrar.$this->nombre;
    }
}
/*
TODO: POO Instanciar 
*/
require_once('clases/app.php');
$pastor= new perro('nana','pastor aleman');