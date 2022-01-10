<?php

//Operadores lógicos

// && (AND)
// || (OR)
// > (Mayor que)
// < (Menor que)
// >= (Mayor o igual que)
// <= (Menor o igual que)
// == Igual que
// === Igual estricto
// != Diferente que
// !== Diferente estricto
// ! (Negación)

//Tipos booleanos (true, false)

// $verdadero = true;
// $falso = false;

// var_dump (1); 

// var_dump ($falso);

// echo $verdadero;

// $resultado = 5 > 3;
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 > 7;
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 >= 5;
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 <= 3;
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 == 5; // chequea si el valor es el mismo
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 === "5"; //chequea si el valor y el tipo es el mismo
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 === 5.0;
// var_dump($resultado);
// echo "<br>";

// $resultado = 5 == 5.0; 
// var_dump($resultado);
// echo "<br>";

$dado = 5;
$resultado = $dado >= 1 && $dado < 6;
var_dump($resultado);

$user ="global";
$resultado = $user == "global admin" || $user == "global"; //La persona es admin? SI
var_dump($resultado);

$user ="global";
$resultado = !($user == "global admin" || $user == "global"); //Puede loggerse el admin? NO
var_dump($resultado);


