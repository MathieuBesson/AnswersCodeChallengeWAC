<?php
namespace Classes;

class Code
{
    private $mots;

    public function __construct($mots)
    {
        $this->mots = $mots;
    }

    public function getResult()
    {
        $code = '';

        $nbLettres = strlen(reset($this->mots));

        for($i = 0; $i <$nbLettres; $i++){
            $code .= $this->getLettreOfCode($i);
        }

        return $code;
    }

    private function getLettreOfCode($numLettre)
    {
        $arrayLettres = [];

        foreach($this->mots as $mot){
            $lettre = substr($mot, $numLettre, 1);
            $arrayLettres[] = $lettre;
        }

        $countValue = array_count_values($arrayLettres);
        asort($countValue); 
        return array_key_last($countValue);
    }
}
