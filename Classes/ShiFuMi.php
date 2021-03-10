<?php 


class ShiFuMi
{
    private array $coups;
    private string $result = '';

    public function __construct($coups)
    {
        $this->coups = str_split($coups);
    }

    public function fight()
    {
        foreach($this->coups as $coup){
            // PHP 8
            $this->result .= match($coup) {
                'P' => 'F',
                'F' => 'C',
                'C' => 'P'
            };
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}