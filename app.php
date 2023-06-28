<?php
/*
TODO: Autoload 
*/
/*  
?es una técnica que permite cargar automáticamente las
?clases cuando son necesarias, sin tener que incluir manualmente los archivos de clase en cada punto
?del código.
*/
// Clase base
function my_autoload($clase){
    require __DIR__.'/clases/'.$clase.'.php';
}
spl_autoload_register('my_autoload');

$nombre= new Nombre();
$edad= new Edades();