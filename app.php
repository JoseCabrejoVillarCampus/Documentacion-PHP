<?php
/*
TODO: POO Interfaces 
*/
/*  
?una interfaz es una estructura que define un conjunto de
?métodos que una clase debe implementar. Es un contrato que especifica qué métodos debe
?proporcionar una clase sin especificar cómo se implementan esos métodos.
*/
interface Area
{
    public function calcularArea();
}
class cuadrado implements Area{
    private $arista;
    public function __construct($arista){
        $this->arista=$arista;
    }
    public function calcularArea(){
        return ($this->arista)*2;
    }
}
$rectangulo = new cuadrado(3);
echo $cuadrado->calcularArea();