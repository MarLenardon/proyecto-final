<?php
// Documentacion oficial
// https://www.php.net/manual/ref.array.php

// $nombres = [
//     "Barclat",
//     "Bort",
//     "Bert",
//     "Bart",];

// var_dump ($nombres);

// -----------
// array_push
// -----------
// Agrega un elemento al final del array


// var_dump ($nombres);
// $nombres[] = "Barto"
//  echo "<pre>";
// array_push ($nombres, "Barto");
// var_dump ($nombres);

// ----------
// array_pop
// Toma el último elemento del array lo devuelve. Además remueve el elemento
// ----------
// $ultimo = array_pop($nombres);
// echo "<pre>";
// var_dump ($nombres);
// var_dump ($ultimo);

// ---------------
// array_unshift
// Agrega un elemento al inicio del array
// --------------

// array_unshift ($nombres, "Bart");
// var_dump ($nombres);

// array_shift 
// Toma el primer elemento y lo devuelvo. Además, lo elimina. 
// array_shift ($nombres);
// var_dump ($nombres);

// sort
// Ordena los elementos del array 
// sort ($nombres);
// var_dump ($nombres);

// echo "<br>";
// rsort ($nombres); // orden inverso
// var_dump ($nombres);

// array_reverse 
// Invierte los elementos y devuelve un nuevo array, pero no modifica los valores del array original.
// echo "<br>";
// $order = array_reverse ($nombres);
// var_dump ($order);

// count
// // Cuenta los elementos del array
// echo "<br>";
// $cantidad = count($nombres);
// var_dump($cantidad);

// // implode
// // Une los elementos del array usando "pegameto" y devuelve una cadena de texto.
// $cadena = implode(" - ", $nombres); // Devuelve una cadena de texto
// var_dump ($cadena); 

// explode 
// Separa una cadena de texto por el separador determinado y devuelve un array
// $path = "localhost/Programaci%c3%b3n/clases/php4/ejercicio4";
// $carpetas = explode("/", $path);
// var_dump ($carpetas);

// Array multimensional
// Es un array en cuyos elementos (todos o ninguno) hay otro array

$categorías = [
    "deportes" => ["fúltbol", "rugby", "atletismo"],
    "espectáculos" => ["cine", "teatro", "magia"],
    "música" => ["rock", "reggae", "pop"],
];

// echo "<pre>";
// var_dump ($categorías);

// $valor = array_pop ($categorías["deportes"]);
// echo $valor;

$valor = $categorías["deportes"][2];
echo $valor;