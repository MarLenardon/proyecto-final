<?php

//Condicionales

// if

$edad = 5;

// if ($edad >= 18) { 
//     echo "Eres mayor de edad";
//     $acceso = true;
//     var_dump ($acceso);
//     }

// else

if ($edad >= 18) { 
    echo "Eres mayor de edad";
    $acceso = true;
    var_dump ($acceso);
} else {
    echo "Eres menor de edad";
    $acceso = false;
    var_dump ($acceso);
}

// if elseif else