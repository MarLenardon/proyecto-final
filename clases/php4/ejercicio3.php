<!-- --------------------------------
EJERCICIO 3
-------------------------------- -->

<?php

$links = [
    [
        'url' => 'https://www.google.com',
        'nombre' => 'Google',
    ],
    [
        'url' => 'https://www.facebook.com',
        'nombre' => 'Facebook',
    ],
    [
        'url' => 'https://www.youtube.com',
        'nombre' => 'Youtube',
    ],
];

function links($links) {
    foreach($links as $link) { 
        $value = $link["url"];
        $name = $link["nombre"]; 
        echo "<a href=$value>$name</a>" . "</li>";    
    }
    // return "<li>". "<a href=$value>$name</a>" . "</li>";  
};

// Usando un foreach para recorrer el array mostrar un listado de tres anclas donde el href sea la url y el texto el nombre de cada uno de los items del array.

// Resultado:

// <a href="https://www.google.com">Google</a>
// <a href="https://www.facebook.com">Facebook</a>
// <a href="https://www.youtube.com">Youtube</a>
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links</title>
</head>
<body>
    <h1>Listado de links</h1>

    <nav> 
        <ul>
            
                <?php
                links($links)
                ?>
            
        </ul>
    </nav>

</body>
</html>