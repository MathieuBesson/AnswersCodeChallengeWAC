<?php 
namespace Classes;

class Armee
{
    private int $armee;
    private array $result;
    private array $troupes;


    public function __construct(int $armee)
    {
        $this->armee = $armee;
    }

    public function fight(): void 
    {
        foreach($this->troupes as $troupe){
            $troupesForCurrentTroupe = floor($this->armee / $troupe->part);

            $nbOfTroupe = min(floor($troupesForCurrentTroupe / $troupe->force), $troupe->max);
    
            $this->armee -= $nbOfTroupe * $troupe->force;
            $this->result[] = $nbOfTroupe;
        }
    }

    public function getResult(): string
    {
        return implode('_', $this->result);
    }

    public function addTroupe(Troupe $troupe)
    {
        $this->troupes[] = $troupe;
    }

}