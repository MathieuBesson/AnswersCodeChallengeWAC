<?php
namespace Classes\AttaqueTitans;

class Habitations 
{
    private $habitations = [];

    public function __construct($datasHabitations)
    {
        $this->habitations = $this->createHabitation($datasHabitations);
    }

    private function createHabitation($datasHabitations)
    {
        $habitations = [];
        foreach($datasHabitations as $habitation){
            $habitations[] = new Habitation($habitation);
        }
        return $habitations;
    }

    public function findBestHabitation($titan)
    {
        $bestHabitation = [
            'top' => reset($this->habitations),
            'bottom' => reset($this->habitations)
        ];

        foreach($this->habitations as $habitation){
            $bestHabitation['top'] = 
                            $habitation->hauteur < $bestHabitation['top'] && 
                            $habitation->hauteur > $titan->taille 
                            ? $habitation
                            : $bestHabitation['top'];

            $bestHabitation['bottom'] = 
                            $habitation->hauteur > $bestHabitation['bottom'] && 
                            $habitation->hauteur <= $titan->taille  
                            ? $habitation
                            : $bestHabitation['bottom'];
        }

        return ($bestHabitation['top'] > $titan->taille) ? $bestHabitation['top'] : $bestHabitation['bottom'];

        // dd($this->habitations);

        // dd($bestHabitationByTop);
        // dd($bestHabitationByBottom);
        // die;

        // if($bestHabitation !== 0){
        //     return $bestHabitation;
        // }
    }


    public function findBestHabitation2($titan)
    {
        $hauteursBiggerThanTitan = [];
        foreach($this->habitations as $habitation){
            if($habitation->hauteur > $titan->taille){
                $hauteursBiggerThanTitan[] = $habitation;
            }
        }

        if(!empty($hauteursBiggerThanTitan)){
            usort($hauteursBiggerThanTitan, function($a, $b){
                return $a->hauteur - $b->hauteur;
            });

            return reset($hauteursBiggerThanTitan);
        }

        usort($this->habitations, function($a, $b){
            return $b->hauteur - $a->hauteur;
        });
        
        return reset($this->habitations);
    }
}





