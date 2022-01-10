<?php

require __DIR__ . "/php/classes/Personaje.php";
require __DIR__ . "/php/classes/Aldeano.php";
require __DIR__ . "/php/classes/Paladin.php";
require __DIR__ . "/php/classes/Piquero.php";

$aldeano = new Aldeano(15, "Maya");
$paladin = new Paladin(30, "Español",10);

echo "<pre>";

// $paladin->atacar($aldeano);
// // $aldeano->atacar();

// var_dump($aldeano);
// var_dump($paladin);

// $paladin->mover(10,30);

// var_dump($paladin);

$piquero = new Piquero(30,"Español",3);
$piquero->atacar($aldeano);

var_dump($piquero);

