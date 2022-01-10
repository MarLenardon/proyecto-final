<?php

include "php/classes/Unidad.php";
include "php/classes/UnidadMilitar.php";
include "php/classes/Aldeano.php";
include "php/classes/Arquero.php";
include "php/classes/Jinete.php";
include "php/classes/Monje.php";

echo "<pre>";

$arquero = new Arquero();
$jinete = new Jinete();

// var_dump($arquero, $jinete);

$jinete->mover(30,25);
$arquero->atacar($jinete);
// $jinete->atacar($arquero);

var_dump($jinete,$arquero);

// $arquero2 = new Arquero();
// var_dump($arquero2);