<?php


class Titan 
{
    public $taille;
    public $vitesse;
    public $pv; 

    public function __construct($datasTitan)
    {
        [$this->taille, $this->vitesse, $this->pv] = explode(';', $datasTitan);
    }
}





