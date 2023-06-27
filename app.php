<?php
/*
TODO: parent::  
*/
/*  
?Es posible acceder a los metodos sobreescritos o a las propiedades estaticas haciendo referencia a ellos con
*/
class BaseClass{
    final public function test(){
        echo 'llamada';
    }
}
class ClassExtendida extends BaseClass{
    function mostrarVar(){
        echo 'clase extendida';
        parent::mostrarVar();
    }
}
$extendida =  new ClassExtendida();
$extendida->mostrarVar();
