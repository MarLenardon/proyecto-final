<?php

$roles = [
    'superadmin' => 'El usuario puede hacer todo y crear admins',
    'admin' => 'El usuario puede hacer todo menos crear admins',
    'seller' => 'El usuario puede vender y comprar',
    'buyer' => 'El usuario puede comprar',
    'guest' => 'El usuario no puede hacer nada',
];

$user = "buyer";
echo($roles[$user]);
// var_dump($roles)

// if ($user == "buyer") {
    // foreach
//     echo "El usuario puede comprar";
// }

foreach ($roles as $clave => $valor) {
    if ($user == $clave) {
        echo $valor;
    }    
}



//¿¿key y value pueden tomar cualquier nombre??
// $clave = "admin";
// $roles["$user"]
