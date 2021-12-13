<!-- ---------------------------------
EJERCICIO 4
--------------------------------- -->

<!-- <nav>
    <ul>
        <li>Home</li>
        <li>Electrodomésticos</li>
        <li>Lavarropas</li>
        <li>Carga frontal</li>
    </ul>
</nav>  -->

<?php
    function breadcrumbsCreator($list) {
        $bread = "<nav>";
            $bread .= "<lu>";
                $bread .= "<li>";
                    $bread .= implode("</li>"."<li>",$list);
                $bread .= "</li>";
            $bread .= "</lu>";               
        $bread .= "</nav>";
        return $bread;
    }
        
    $breadcrumbs = [
        "Home",
        "Electrodomésticos",
        "Lavarropas",
        "Carga frontal",
    ];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
    <nav>
        <ul>
            <li>
            <?php
                echo breadcrumbsCreator($breadcrumbs);
            ?>
            </li>
        </ul>
    </nav>

</body>
</html>


