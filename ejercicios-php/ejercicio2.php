<!-- <?php

$categorias = [
    'Deportes',
    'Ciencia',
    'Tecnología',
    'Cocina',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     Listar las categorías dentro de un ul
    <ul>
        <?php
        $categorias = [
            'Deportes',
            'Ciencia',
            'Tecnología',
            'Cocina',
        ];
        for ($i=0; $i <count($categorias); $i++) {
            echo "<li> $categorias[$i] </li>";        }    
        ?>
    </ul>
</body>
</html> -->
