<?php

// ---------------------
// OPCION 1
// ---------------------

// function saludar($nombres) {
//     echo "Hola $nombres<br>";
// }
     
// function saludarATodos(array $nombres) {
//     foreach ($nombres as $nombre) 
//     // {saludar($bye);}
//     {echo "Hola $nombre<br>";}
// }

// $nombres = [
//     "Fran",
//     "Colo",
//     "Maxi",
//     "Mari",
//     "Magui",
// ];

// saludarATodos($nombres);


// -------------------------
// OPCION 2
// -------------------------

function saludar($hola) {
    echo "Hola $hola<br>";
}
     
function saludarATodos(array $chau) {
    foreach ($chau as $bye) 
    {saludar($bye);}
    // {echo "Hola $bye<br>";}
}

$nombres = [
    "Fran",
    "Colo",
    "Maxi",
    "Mari",
    "Magui",
];

saludarATodos($nombres);