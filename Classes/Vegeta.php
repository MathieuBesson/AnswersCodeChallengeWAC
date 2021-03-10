<?php 

class Vegeta {
    private $force; 
    private $niveau = 1; 
    private $puissance; 

    public function __construct($force)
    {
        $this->force = $force;
        $this->calculPuissance();
    }

    public function fight($ennemi)
    {
        while($ennemi >= $this->getPuissance()){
            $this->niveau += 1;
        }
        $this->addForceFromEnnemi($ennemi);
    }

    private function calculPuissance(){
        $this->puissance = $this->force * $this->niveau;
    }

    private function addForceFromEnnemi($forceEnnemi){
        $this->force += floor($forceEnnemi/10);
    }

    public function getPuissance(){
        $this->calculPuissance();
        return $this->puissance;
    }

    public function __toString()
    {
        return $this->getPuissance();
    }
}