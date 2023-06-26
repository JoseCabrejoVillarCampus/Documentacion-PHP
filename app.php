<?php
/*
TODO: Programacion Orientada a Objetos PHP  
*/
/*  
?Clases
*/
class ClaseSencilla{
    public $var ='valor'; //?atributo
    public function mostrarvar(){
        echo $this->var; //*$this es una pseudo variable que dispone cuando un metodo es invocadodentro del contexto de un objeto, referencia al objeto invocador
    }
}
/*  
?Instancia
*/
$instancia = new ClaseSencilla;//*usamos la palabra new para crear una instancia de una clase
/*  
?new self y new parent
*/
/* En el contexto de la clase, es posible crear un nuevo objeto con estas dos formas*/