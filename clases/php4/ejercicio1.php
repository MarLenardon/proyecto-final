<!-- --------------------------------
EJERCICIO 1
--------------------------------- -->
<?php
    $categorias = [
        'Futbol',
        'Baloncesto',
        'Tenis',
    ];
            
    function lista($categorias) {
        // return "<nav>"."<ul>"."<li>".implode("</li><li>", $categorias)."</li>"."</ul>"."</nav>";
        $html = "<nav>";
        $html .= "<ul>";
        $html = $html . "<ul>"; //sinonimo 14
        $html .= "<li>";
        $html .= implode("</li><li>", $categorias);
        $html .= "</li>";
        $html .= "</ul>";
        $html .= "</nav>";
        return $html;  
    }
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
        <?php
        echo lista($categorias);
        ?>
</body>
</html>
