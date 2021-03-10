<?php


class Map
{

    private array $cases;
    private array $countColor;
    // private int $currentCasId;
    const BORDER_MAP = [
        'RIGHT' => 9,
        'LEFT' => 0
    ];

    const CASE_INEXISTANTE = -1;


    public function __construct(array $cases)
    {
        $this->cases = $cases;
    }

    // Vérifier si les cases autour ne sont pas déjà colorer
    public function paintBlue($caseId)
    {
        if (isset($this->cases[$caseId]) && $this->cases[$caseId] === 'w' ) {
            $this->cases[$caseId] = 'b';
            return true;
        }
        return false;
    }

    public function paintAllBlue()
    {
        foreach($this->cases as $index => $pixel){

            if($pixel !== 'r'){
                continue;
            }

            $this->paintBlue($this->top($index));
            $this->paintBlue($this->bottom($index));
            $this->paintBlue($this->right($index));
            $this->paintBlue($this->left($index));

        }
    }

    public function top($position){
        return $position - 10;
    }

    public function bottom($position){
        return $position + 10;
    }

    public function right($position){
        return $this->inRow($position, self::BORDER_MAP['RIGHT']) ? self::CASE_INEXISTANTE : $position + 1;
    }

    public function left($position){
        return $this->inRow($position, self::BORDER_MAP['LEFT']) ? self::CASE_INEXISTANTE : $position - 1;
    }

    public function inRow($currentCaseId, $reste){
        return $currentCaseId % 10 === $reste;
    }

    public function getCountColor($color)
    {
        $nb = 0;
        foreach ($this->cases as $key => $pixel) {
            $nb += ($pixel === $color) ? 1 : 0;
        }
        return $nb;
    }
}
