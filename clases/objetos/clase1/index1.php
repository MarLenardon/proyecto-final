<?php

//Tipos de datos 
//booleano, integer (entero), float (decimal), string, array, null (cuando no hay ningún valor), undefined (valor interno sin uso práctico real)

$null = null;
$null; //sinónimos 

// object Tipo de dato genérico al que le seteamos nuestras propias características

include "Paladin.php";

//La instancia es el objeto en concreto
$paladinHuno = new Paladin(110, "Huno", 100, "rojo");
// $paladinHuno->atacarA();
// $paladinHuno->ataque = 100;
// $paladinHuno->civi = "Huno";
// $paladinHuno->estandarte = "rojo";  

echo "<pre>";
var_dump($paladinHuno);
// var_dump($paladin->ataque);


$paladinEspanol = new Paladin(50,"Español",120);
// $paladinEspanol->atacarA($paladinHuno);
// $paladinEspanol->ataque = 120;
// $paladinEspanol->civi = "Español";
// $paladinEspanol->estandarte = "azul";  

echo "<pre>";
var_dump($paladinEspanol);