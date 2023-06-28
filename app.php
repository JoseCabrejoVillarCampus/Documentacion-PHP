<?php
/*
TODO: POO Polimorfismo 
*/
/*  
?upermite tratar objetos
?de diferentes clases de manera uniforme, utilizando una interfaz común..
*/
// Clase base
class Animal {
    public function hacerSonido() {
        echo "Haciendo un sonido genérico";
    }
}

// Clases derivadas
class Perro extends Animal {
    public function hacerSonido() {
        echo "Guau guau!";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        echo "Miau miau!";
    }
}

// Función que utiliza polimorfismo
function hacerSonidoAnimal(Animal $animal) {
    $animal->hacerSonido();
}

// Crear instancias de las clases derivadas
$perro = new Perro();
$gato = new Gato();

// Llamar a la función con instancias de diferentes clases
hacerSonidoAnimal($perro);  // Output: "Guau guau!"
hacerSonidoAnimal($gato);   // Output: "Miau miau!"