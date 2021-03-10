<?php

// Haut    => A => H
// Bas     => V => B
// Gauche  => J => G
// Droite  => L => D

// Ligne 1 => 0, 1, 2
// Ligne 2 => 3, 4, 5
// Ligne 3 => 6, 7, 8

// Vérifier l'opposé pour voir si OK ou KO
// Vérifier si la ligne est rempli par une même lettre


define('TRAITEMENT', [
    'A' => [
        [0, 6], // A V      // Haut 
        [1, 7], // A V
        [2, 8], // A V
    ],
    'V' => [
        [6, 0], // V A      // Bas
        [7, 1], // V A
        [8, 2], // V A
    ],
    'J' => [
        [0, 2], // J L      // Gauche
        [3, 5], // J L
        [6, 8], // J L
    ],
    'L' => [
        [2, 0], // L J      // Droite
        [5, 3], // L J
        [8, 6], // L J
    ]
    
]);

define('OPPOSITES', [
    'A' => 'V',
    'V' => 'A',
    'J' => 'L',
    'L' => 'J'
]);

define('CORRESPONDANCE', [
    'A' => 'H',
    'V' => 'B',
    'J' => 'G',
    'L' => 'D'
]);

class LaraCroft
{
    private array $dessins;
    private string $finalSequence;

    public function __construct(array $dessins)
    {
        $this->dessins = $this->formateInitialData($dessins);

        echo '<pre>';
        print_r($this->dessins);
        echo '</pre>';

    }

    public function formateInitialData(array $dessins)
    {
        $dessinsFormate = [];

        foreach($dessins as $dessin){
            $arrDessin = explode(' ', $dessin);
            $dessinsFormate[] = $this->setDessinInArray($arrDessin);
        }

        return $dessinsFormate;
    }

    public function setDessinInArray(array $arrDessin): array
    {
        $dessin = [];

        foreach($arrDessin as $currentDessin){
            [$key, $value] = explode(':', $currentDessin);
            $dessin[$key] = $value;
        }

        return $dessin;
    }


    public function getResult(): string
    {
        return "test";
    }

    public function calculAllSequences()
    {
        foreach ($this->dessins as $dessin) {
            $this->finalSequence = $this->calculOneSequence($dessin);
        }
    }

    public function calculOneSequence($dessin)
    {
        $sequence = '';
        foreach (OPPOSITES as $caract => $opposite) {
            foreach(TRAITEMENT[$caract] as $oppositionKeyValue){
    
                [$firstCase, $secondCase] = $oppositionKeyValue;
    
                // Vérifier si il y a quelque chose dans la case sinon -> continue; 
                if(!array_key_exists($firstCase, $dessin)){
                    continue;
                }
    
                // Verifier qu'il s'agit de la bonne lettre sinon -> continue;
                if($dessin[$firstCase] !== $caract){
                    continue;
                }

                // Verifier la case opposé si elles s'opposent -> continue 
                if(array_key_exists($secondCase, $dessin) && $dessin[$firstCase] === $opposite){
                    continue;
                }
                // Si tout est OK ajouté la correspondance à la séquence  
                $sequence .= $dessin[$firstCase];
            }
        }
    }
}
