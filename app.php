<?php
/*
TODO: Arreglos, Arreglos Asociativos y Funciones Para Arreglos  
*/
/*
?Los arreglos en php son estructuras, donde podemos almacenar multiples tipos de datos y de valor, para anexar un arregl lo podemos hacer de la siguiente manera:  
*/
$arreglo= array("valor1","valor2","valor3");
/*
*Acceder a un elemento del array
*/
$arreglo[1];
/*
*Añadir un elemento en un indice especifico del arreglo  
*/
$arreglo[3]='elemento';
/*
*Añadir un elemento al final del Array
*/
array_push($arreglo,'elemento1');
/*
*Añadir elemento al inicio
*/
array_unshift($arreglo,'elemento2');
/*
*Para ver los elementos dentro de un array  
*/
var_dump($arreglo);
/*
?Array Asociativos: Son un tipo de estructura de datos que nos permiten asociar claves a los valores  
*/
$arregloAsociativo=array(
    "calve1"=>"valor1",
    "calve2"=>"valor2",
    "calve3"=>"valor3"
);
/*
*Para acceder a un valor de un array asociativo  
*/
echo $arregloAsociativo["clave1"];
/*
?Funciones en arreglos:  
*/
/*  
*in_array(): Buscar elementos en un array
*/
/*  
*sort(): Oredenar elementos en un array de menor a mayor
*/
/*  
*rsort(): Ordena elementos en un array de mayor a menor
*/
/*  
*asort(): Ordena elementos en un array por orden alfabetico
*/
/*  
*arsort(): Ordena por orden alfabetico empezando por la z
*/
/*  
*ksort(): Ordena por las llaves en orden alfabetico
*/
/*  
*krsort(): Ordena por las llaves en orden alfabetico de la z a la a
*/
?>