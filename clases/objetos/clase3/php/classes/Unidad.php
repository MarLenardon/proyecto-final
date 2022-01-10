<?php

class Unidad 
{
    public $x;
    public $y;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
    }

    public function mover($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

        echo "Se está ejecurando <i>mover</i><br>";

    }
}