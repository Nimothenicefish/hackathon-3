<?php

namespace Hackathon3\Wolfestein;

class Debug
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /** Cette fonction doit retourner un tableau contenant les homophones des phrases. Exemple : "Le maitre va mettre fin au combat" retourne => array('maitre','mettre) */
     public function myHomophones($text)
    {
	// TODO : return array 
    }
}
