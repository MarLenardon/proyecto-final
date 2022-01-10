<?php

class Paladin extends Personaje
{
    // public $ataque;

    public function __construct($vida,$civi,$ataque)
    {
        parent::__construct($vida,$civi);
        $this->ataque = $ataque;
    }

    public function atacar($contrincante=null)
    {
       if ($this->civi == $contrincante->civi)
       {
           echo "No puedo atacar a un compañero";
       } else {
            echo "Estoy atacando<br>";
            $contrincante->vida -= $this->ataque;
       }
    }

    public function mover($x, $y)
    {

        for($this->x; $this->x < $x; ) {

            $this->x+=3;

            if ($this->x >= $x) {
                $this->x = $x;
                echo "$this->x<br>";
            } else {
                echo "$this->x<br>";
            }
        }
        
        for($this->y; $this->y < $y; ) {

            $this->y+=3;

            if ($this->y >= $y) {
                $this->y = $y;
                echo "$this->y<br>";
            } else {
                echo "$this->y<br>";
            }
        }
    }




}

