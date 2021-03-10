<?php

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


class Objets
{
    private $objects;

    public function __construct($objects)
    {
        $this->objects = $objects;
    }

    public function triPlusGrand($nbObject = 10)
    {
        $objets = $this->objects;
        arsort($objets);
        return array_slice($objets, 0, $nbObject);
    }

    public function triPlusPetit($nbObject = 10)
    {
        $objets = $this->objects;
        asort($objets);
        return array_slice($objets, 0, $nbObject);
    }
}
