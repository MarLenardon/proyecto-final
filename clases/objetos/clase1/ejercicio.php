<?php

include "Paladin.php";


$paladinHuno = new Paladin(150, "Huno", 100, "rojo");
$paladinEspanol = new Paladin(50,"Español",120);


$paladinEspanol->atacarA($paladinHuno); 

// $paladinHuno->atacarA($paladinEspanol);