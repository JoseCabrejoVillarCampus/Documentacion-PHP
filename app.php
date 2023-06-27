<?php
/*
TODO: Extends  
*/
/*  
?Una clase puede heredar los metodos y propiedades de otra clase usando la palabra reservada extends en la declaracion de la clase.

?Los metodos y propiedades heredados pueden ser sobreescritos con la redeclaracion de estos utilizando el mismo nombre que en la clase madre, a menos que se halla definido el metodo como final.
*/
class BaseClass{
    final public function test(){
        echo 'llamada';
    }
}
