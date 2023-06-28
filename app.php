<?php
/*
TODO: Namespaces en PHP 
*/
/*  
?Usamos la palabra namespace para
?importar clases, funciones y constantes desde otros espacios de nombres.
*/
// Clase base
namespace App;

class Animal{
    public function __construct(){
        echo"perro";
    }
}
/*  
?Cuando se utiliza use en la definición de un espacio de nombres, se está especificando una ruta corta
?(alias) para acceder a un elemento específico de otro espacio de nombres.
*/
use App\Animal;
function my_autoload($clase){
    $fileClass = explode('\\',$clase);
    require __DIR__.'/clases/'.$fileClass[1].'.php';
}
spl_autoload_register('my_autoload');
$animal= new Animal();