<?php
namespace Classes\AttaqueTitans;

class Titans 
{
    private $titans = [];

    public function __construct($datasTitans)
    {
        $this->titans = $this->sortTitans($datasTitans);
    }

    private function comparator($object1, $object2) { 
        return $object1->taille < $object2->taille; 
    } 

    private function sortTitans($datasTitans)
    {
        $titans = [];
        foreach($datasTitans as $titan){
            $currentTitan = new Titan($titan);
            if($currentTitan->pv <= 0){
                continue;
            }
            $titans[] = $currentTitan;
        }
        if(!empty($titans)){
            usort($titans, [$this,'comparator']); 
            return $titans;
        }
        return null;
    }

    public function findBiggestTitan()
    {
        if(!empty($this->titans)){
            return reset($this->titans);
        }
    }



    
}





