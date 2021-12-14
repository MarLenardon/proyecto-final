<?php

$numeros = [
    3,
    7,
    2,
    1,
    9,
    4,
];


// Determinar cual es el mayor y mostrarlo con un echo
// es posible que necesitemos una variable auxiliar para guardar el mayor

$mayor = $numeros[0];

for($i=0; $i<count($numeros); $i++) {
    if ($mayor < $numeros[$i]) 
        {$mayor = $numeros[$i];}
}

echo $mayor;
