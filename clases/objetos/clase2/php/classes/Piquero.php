<?php

//Agregar atributo $largoDePica
// Setear el atributo en el constructor
// En el método atacar, el piquero puede hacer un daño de entre 10 y 15 puntos random

class Piquero extends Personaje
{
    public $largoDePica;

    public function __construct($vida,$civi,$largoDePica)
    {
        $this->vida = $vida;
        $this->civi = $civi;
        $this->largoDePica = $largoDePica;
    }

    public function atacar($contrincante=null)
    {
        if ($this->civi == $contrincante->civi)
        {
            echo "No puedo atacar a un compañero";
        } else {
            $value = rand(10,15);
            echo "El piquero hace un daño de $value"; 
        }
    }


}
