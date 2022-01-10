<?php

class Monje extends Unidad

{

    public function convertir($unidad)
    {

    }

    public function curar($unidad)
    {

    }

    public function enRango($unidad)
    {
        $distanciaX = $this->x - $unidad->x;
        $distanciaY = $this->y - $unidad->y;

        return (abs($distanciaX) <= 2 && abs($distanciaY) <= 2);

    }

}