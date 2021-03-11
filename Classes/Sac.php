<?php
namespace Classes;

class Sac
{
    private $lengthMax;
    private $remplissage = 0;

    public function __construct($lengthMax)
    {
        $this->lengthMax = $lengthMax;
    }

    private function addToSac($lengthObject){
        if(!$this->possiblaToAddToSac($lengthObject)){
            return false;
        }

        $this->remplissage += $lengthObject;
        return true;
    }

    private function possiblaToAddToSac($tailleObjet)
    {
        return ($this->remplissage + $tailleObjet <= $this->lengthMax);
    }

    public function remplir($objects){
        foreach($objects as $objet){
            $this->addToSac($objet);
        }
    }

    public function __toString()
    {
        return (string) $this->remplissage;
    }
}



