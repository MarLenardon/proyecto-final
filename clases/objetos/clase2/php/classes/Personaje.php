<?php

class Personaje 
{
    public $vida;
    public $civi;
    public $x;
    public $y;  
    
    
    public function __construct($vida,$civi)
    {
        $this->vida = $vida;
        $this->civi = $civi;
        $this->x = 0;
        $this->y = 0;
    }

    public function mover($x, $y)
    {
        for($this->x; $this->x < $x;) {
            $this->x++;
            echo "$this->x<br>";
        }
        
        for($this->y; $this->y < $y;) {
            $this->y++;
            echo "$this->y<br>";
        }
        
        // $this->x = $x; Acá no transiciona, salta
        // $this->y = $y;
    }
}