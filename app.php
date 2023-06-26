<?php
/*
TODO: Json_encode  
*/
/*  
?Se usa para convertir una estructura de datos en php en una cadena JSON
*/
$message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
/*
TODO: Json_decode  
*/
/*  
?Se usa para convertir una cadena JSON en una estructura de datos de php
*/
\App\academic_area\academic_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAcademicArea();