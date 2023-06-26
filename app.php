<?php
/*
TODO: Condicionales  
*/
/*  
?Las estructuras condicionales son una estructura de control de flujo en programación que permite que
?el programa tome decisiones basadas en si se cumple o no una condición
*/
/*
*If  
*/
$numero_uno = 5;
$numero_dos = 10;

if($numero_uno < $numero_dos){
    echo "dos es mayor";
} else {
    echo "dos es menor que uno";
}
/*  
*Switch Case
*/
/*  
?En PHP, el "switch" es una estructura de control que permite ejecutar diferentes bloques de código
?dependiendo del valor de una variable.
*/
$curso='php';
switch ($curso){
    case 'php':
        echo "lunes y martes";
        case 'java':
            echo "miercoles";
            case 'python':
                echo "viernes";
                default:
                    echo "no existe curso";
                    break;    
}
/*  
?Ciclos While, Do While y For
*/
/*  
*For
*/
$numero = 1;
for ($numero0= 10; $numero <= 10 ; $numero++) { 
    echo $numero;
}
/*  
*While
*/
$numero = 1;
while ($numero <= 10){
    echo $numero;
    $numero = $numero +1;
}
/*  
*Do While
*/
$numero = 1;
do{
    echo $numero;
    $numero++;
}while ($numero <= 15);

