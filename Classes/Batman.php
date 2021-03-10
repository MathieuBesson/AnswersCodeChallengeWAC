<?php 

class Batman 
{
    const DEGATS_BATMOBILE = 10;
    private $ennemis;
    private $ennemisFormate;
    private $instructions = ''; 

    public function __construct($ennemis)
    {
        $this->ennemis = $ennemis;
    }

    public function formateDatas()
    {
        foreach($this->ennemis as $ennemi){
            [$currentPosition, $currentLifePoint] = explode(' ', $ennemi);
            $currentPosition = explode(':', $currentPosition);
            $currentLifePoint = explode(':', $currentLifePoint);
            $this->ennemisFormate[end($currentPosition)] = end($currentLifePoint);

            // [$position, $pv] = sscanf($ennemi, 'x:%d pv:%d');
        }
        ksort($this->ennemisFormate);
        echo '<pre>';
        print_r($this->ennemisFormate);
        echo '</pre>';
    }

    public function createInstruction()
    {
        $batmobilePosition = 0;
        foreach($this->ennemisFormate as $position => $pv){
            $nbDeplacement = ($position - $batmobilePosition);
            $this->instructions .= str_repeat('D', $nbDeplacement);

            $nbAttaques = ceil($pv / self::DEGATS_BATMOBILE);
            $this->instructions .= str_repeat('F', $nbAttaques);

            $batmobilePosition = $position;
        }
    }

    public function getResult()
    {
        return $this->instructions; 
    }
}