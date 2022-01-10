<?php

class UnidadMilitar extends Unidad
{
    public $rangoDeAtaque;

    // public function __construct(0, 0)
    // {
    //     parent::__construct(0,0);
    // }

    public function atacar($unidad)
    {
        if($this->enRango($unidad)) {
            echo get_class($this) ." está ejecutando <i>atacar</i><br>";
        } else {
            // echo get_class($unidad) . " está muy lejos para que " . get_class($this) . " ataque"."<br>";
            $this->mover($unidad->x, $unidad->y);
            echo get_class($this) ." está ejecutando <i>atacar</i><br>";
        }
        
    }

    public function enRango($unidad)
    {
        $distanciaX = $this->x - $unidad->x;
        $distanciaY = $this->y - $unidad->y;

        return (abs($distanciaX) <= $this->rangoDeAtaque && abs($distanciaY) <= $this->rangoDeAtaque);
    }
}