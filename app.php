<?php
/*
?echo(): se usa para mostrar una o varias cadenas de texto  
*/
echo "Cadena a imprimir";

/*
?print():esta funcion solo permite imprimir una cadena de texto a la vez  
*/
$palabra = "Pan";
print($palabra);
/*
?printf():es similar a  print(), pero en lugar de imprimir la cadena formateada, la devuelve como resultado  
*/
$palabra="pan";
$mensaje=printf("hola",$palabra);
echo $mensaje;

?>