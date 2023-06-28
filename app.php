<?php
/*
TODO: POO Clases 
*/
/*  
?Las clases son una plantilla que nos permiten definir caracteristicas y comportamientos de los objetosque se pueden crear a traves de dicha clase
*/
class perro{
    private $nombre;
    protected $raza;

    public function __construct($nombre, $edad){
        $this-> nombre = $nombre;
        $this-> raza = $edad;
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
        echo 'wof wof, te ladra'.$this->nombre;
    }
}
/*
TODO: POO Instanciar 
*/
require_once('clases/app.php');
$pastor= new perro('nana','pastor aleman');