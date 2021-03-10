<?php

define('PLUS', '+');
define('MOINS', '-');


class Coffre
{

    private $code;
    private $chemin;
    private $cheminCourant;

    public function __construct($depart, $chemin)
    {
        $this->code = $depart;
        $this->chemin = $chemin;
    }

    public function getCombinaison()
    {
        foreach ($this->chemin as $value) {
            $this->cheminCourant = $value;
            $this->calculCode();
        }

        return $this->code;
    }

    private function calculCode()
    {
        $signe = $this->getSigne($this->cheminCourant);
        $valeur = $this->getValeur($signe);

        if($signe === '+'){
            $this->code += $valeur;
        } else {
            $this->code -= $valeur;
        }
    }


    private function getValeur($signe)
    {
        return pow(10, strlen($this->cheminCourant) -1);
    }


    private function getSigne()
    {
        return substr($this->cheminCourant, 0, 1);
    }
}
