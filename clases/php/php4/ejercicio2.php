<!-- ---------------------------------
EJERCICIO 2
--------------------------------- -->
<?php

$dias = [
    "es" => [
        "Monday" => "lunes", 
        "Tuesday" => "martes", 
        "Wednesday" => "miercoles", 
        "Thursday" => "jueves", 
        "Friday" => "viernes", 
        "Saturday" => "sábado", 
        "Sunday" => "domingo"
     ],

    "en" => [
        "Monday" => "Monday", 
        "Tuesday"  => "Tuesday", 
        "Wednesday" => "Wednesday", 
        "Thursday" => "Thursday",
        "Friday" => "Friday", 
        "Saturday" => "Saturday", 
        "Sunday" => "Sunday"
    ],

    "pt" => [
        "Monday" => "Segunda-feira", 
        "Tuesday"  => "Terça-feira", 
        "Wednesday" => "Quarta-feira", 
        "Thursday" => "Quinta-feira",
        "Friday" => "Sexta-feira", 
        "Saturday" => "Sabado", 
        "Sunday" => "Domingo"
    ],
];

$lang = "pt";

echo $dias[$lang][date("l")];
echo "<br>";
echo date("d-m-Y h:i:s");