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

//Alternativa para el caso anterior

// Arrays

// $users = [18, 150.33, "Bort", false];
// echo "<pre>";
// var_dump ($users); 


$users = [
    "superadmin",
    "admin", 
    "seller", 
    "buyer", 
    "guest"];

// echo "<pre>";
// var_dump ($users); 
// echo $users[3];

// Hardcodeado
// if ($users[0]) {echo "El usuario es superadmin";}
// elseif ($users[1]) {echo "El usuario es admin";}
// elseif ($users[2]) {echo "El usuario es seller";}
// elseif ($users[3]) {echo "El usuario es buyer";}
// else {echo "El usuario es guest";}

// echo $users[0];
// echo "<br>";
// echo $users[1];
// echo "<br>";
// echo $users[2];
// echo "<br>";
// echo $users[3];
// echo "<br>";
// echo $users[4];
// echo "<br>";

// BUCLES - Objetivo recorrer conjuntos de datos
// Primer paso: declaracion de una variables - se suele inicializar con la variable contador. - SE EJECUTA UNA VEZ
// Segundo paso: condicional - SE EVALÚA N VECES AL INICIO
// Tercer paso: el incremento - SE EJECUTA N VECES AL FINAL

// for ($i=0; $i <count($users); $i = $i + 1) {
//     echo $users[$i];
//     echo "<br>";
// }

// modificar el valor de un elemento del array

// $users[0] = "master"
// echo $users[0]

// agregar un elemento al array
// echo "<pre>";
// $users[] = "supermaster";
// var_dump($users);











