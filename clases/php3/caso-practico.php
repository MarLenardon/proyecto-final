<?php

// $user = "superadmin";
// $user = "admin";
// $user = "seller";
// $user = "buyer";
// $user = "guest";

// if ($user == "superadmin") {echo "El usuario es superadmin";}
// elseif ($user == "admin") {echo "El usuario es admin";}
// elseif ($user == "seller") {echo "El usuario es seller";}
// elseif ($user == "buyer") {echo "El usuario es buyer";}
// else {echo "El usuario es guest";}


// $users = [
//     "superadmin",
//     "admin", 
//     "seller", 
//     "buyer", 
//     "guest"];

// $permisos = [
//     "el usuario puede hacer todo y crear admins", 
//     "el usuario puede hacer todo menos crear admins",
//     "el usuario puede comprar y vender",
//     "eL usuario puede solo comprar",
//     "el usuario no puede hacer nada",
// ];

// echo "<pre>";
// var_dump($users, $permisos);

// for($i=0; $i <count($permisos); $i++) {
//     echo $users[$i];
//     echo ": ";
//     echo $permisos[$i];
//     echo "<br>";
// }

// for ($i=0; $i <count($users); $i = $i + 1) {
//     echo $users[$i];
//     echo "<br>";
// }

$roles = [
    "superadmin" => "el usuario puede hacer todo y crear admins",
    "admin" => "el usuario puede hacer todo menos crear admins",
    "seller" => "el usuario puede comprar y vender",
    "buyer" => "el usuario puede vender",
    "guest" => "el usuario no puede hacer nada"
];

echo "<pre>";
var_dump($roles["superadmin"]);

// No se puede meter un for
// for($i=0; $i <count($permisos); $i++) {
//     echo $users[$i];
//     echo ": ";
//     echo $permisos[$i];
//     echo "<br>";

// foreach simple
// foreach ($roles as $rol) {
    // echo $rol;
    // echo "<br>";
// }

// foreach complejo
foreach ($roles as $clave => $valor) {    //¿¿key y value pueden tomar cualquier nombre??
    echo "$clave";
    echo ": ";
    echo "$valor";
    echo "<br>";
}

