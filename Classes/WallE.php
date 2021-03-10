<?php

class WallE
{
    private $force;
    private $vitesse;
    private $batterie;

    public function __construct($force, $vitesse, $batterie)
    {
        $this->force = $force;
        $this->vitesse = $vitesse;
        $this->batterie = $batterie;
    }

    public function tentativeTraitementDechet($force)
    {
        if (!$this->traitementDechetFacile($force)) {
            $this->traitementDechetDifficile($force);
        }
        if ($this->doitSeRecharger()) {
            $this->rechargement();
        }
        
    }

    public function traitementDechetFacile($force)
    {
        if ($this->force >= $force) {
            $this->batterie--;
            return true;
        }
        return false;
    }

    public function traitementDechetDifficile($force)
    {
        $manqueForce = $force - $this->force;
        // print_r($manqueForce);
        $batterieUtilisable = $this->batterie / 2;

        if ($manqueForce > $batterieUtilisable/2) {
            $this->batterie -= 2;
            return false;
        }
        $this->batterie -= $manqueForce * 2;
        return true;
    }

    // Rechargement 

    public function doitSeRecharger()
    {
        return $this->batterie < 20;
    }

    public function rechargement()
    {
        $this->batterie -= $this->vitesse;
        $this->batterie = 100 - $this->vitesse;
    }

    public function __toString()
    {
        return (string) $this->batterie;
    }
}   
