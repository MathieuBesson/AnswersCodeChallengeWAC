<?php 
namespace Classes\AttaqueTitans;


class Habitation  
{
    public $hauteur;
    public $distance;

    public function __construct($datasHabitation)
    {
        [$this->hauteur, $this->distance] = explode(';', $datasHabitation);
    }
}