<?php

//La clase es el molde
class Paladin
{
    //atributos
    public $vida;
    public $civi; 
    public $ataque;
    public $estandarte;


    //metodos = funciones
    public function __construct($vida,$civi,$ataque,$estandarte = "azul")
    {
        // echo "Nuevo Paladín - $param <br>";
        $this->vida = $vida;
        $this->civi = $civi;
        $this->ataque = $ataque;
        $this->estandarte = $estandarte;
    }

    public function atacarA($contrincante)
    {
        $contrincante->vida -= $this->ataque; 
        echo "El paladin $this->civi está haciendo un daño de $this->ataque al paladín $contrincante->civi <br>";

        if ($contrincante->vida > 0) 
        {
            echo "El golpe no fue suficiente<br>";
            echo "El paladín $contrincante->civi contraataca con $contrincante->ataque de daño<br>";
            $contrincante->atacarA($this);
            // $vidaActual = $this->vida - $contrincante->ataque;
            // if ($vidaActual > 0)
            // {
            //     echo "El golpe no fue suficiente<br>";
            // } else
            // {
            //     echo "El golpe fue certero";
            // }

        } else         
        {
            echo "El golpe fue certero<br>";
            echo "El paladín $this->civi es el vencedor<br>";

        }
    }


}


// class Auth
// {
//     //atributos
//     public $email; 
//     public $pass;


// }