<?php

// Permiten englobar una parte del código y ejecutarla cuando necesitamos

// echo "Hola mundo <br>";
// echo "Hola mundo <br>";
// echo "Hola mundo <br>"; 

//Ejemplo_1

// function holaMundo() {
//     echo "Hola mundo <br>";
// }

// holaMundo();
// holaMundo();
// holaMundo();
// holaMundo();
// holaMundo();
// holaMundo();
// holaMundo();


//Ejemplo_2
// function saludar($nombre) {
//     echo "Hola $nombre<br>"; //La variable vive dentro de la función
// }

// saludar("Fran");
// saludar("Colo");
// saludar("Maxi");
// saludar("Juan Carlos");


// Sinónimo
// $nombres = [
//     "Fran",
//     "Colo",
//     "Maxi",];

// foreach ($nombres as $nombre) {
//     saludar($nombre <br>);
// }


// function saludar($nombres) {
//     echo "Hola $hola<br>";
// }
     
// function saludarATodos(array $chau) {
//     foreach ($chau as $bye) 
//     // {saludar($bye);}
//     {echo "Hola $bye<br>";}
// }

// $nombres = [
//     "Fran",
//     "Colo",
//     "Maxi",
//     "Mari",
//     "Magui",
// ];

// saludarATodos($nombres);


function saludar($hola) {
    echo "Hola $hola<br>";
}
     
function saludarATodos(array $chau) {
    foreach ($chau as $bye) 
    // {saludar($bye);}
    {echo "Hola $bye<br>";}
}

$nombres = [
    "Fran",
    "Colo",
    "Maxi",
    "Mari",
    "Magui",
];

saludarATodos($nombres);


// Listado de tipos:
// int: entero
// float: decimal
// string: cadena de texto
// bool: bolueano
// array: array
// object: objeto

function saludarFormal(string $nombre, string $titulo="Sr") {
    echo "Hola ".$titulo." ".$nombre."<br>";
}

saludarFormal("Mari", "Sra.");
saludarFormal("Fran");




function breadcrumbsCreator($list) {
    $item = implode("<nav> <ul> <li>", $list);
    return $item;
}

$breadcrumbs = [
    "Home",
    "Electrodomésticos",
    "Lavarropas",
    "Carga frontal",
]; 

echo breadcrumbsCreator($breadcrumbs);


function cubo($n) {
    return $n * $n * $n;
}
cubo(3);

$numero = 3;
$numeroAlCubo = cubo($numero);
$resultado = $numeroAlCubo + 10;

// Resultado
// <nav>
//     <ul>
//         <li>Home</li>
//         <li>Electrodomésticos</li>
//         <li>Lavarropas</li>
//         <li>Carga frontal</li>
//     </ul>
// </nav>