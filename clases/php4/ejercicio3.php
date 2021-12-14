<!-- --------------------------------
EJERCICIO 3
-------------------------------- -->
<!-- // Usando un foreach para recorrer el array mostrar un listado de tres anclas donde el href sea la url y el texto el nombre de cada uno de los items del array.

// Resultado:

// <a href="https://www.google.com">Google</a>
// <a href="https://www.facebook.com">Facebook</a>
// <a href="https://www.youtube.com">Youtube</a> -->

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

function generadorDeLinks(array $links) {
    $html = "";
        $html .= "<nav>";
            $html .= "<lu>";
                foreach($links as $link) { 
                    $html .= "<li>"; 
                        $html = $html . "<a href={$link["url"]}>{$link["nombre"]}</a>";
                    $html .= "</li>";
                }
            $html .= "</lu>";
        $html .= "</nav>";
    return $html;
}

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
                echo generadorDeLinks($links);
                ?>
        </ul>
    </nav>

</body>
</html>