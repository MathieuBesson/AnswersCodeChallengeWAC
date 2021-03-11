<?php
namespace Classes;

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