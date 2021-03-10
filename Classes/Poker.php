<?php
// define('TYPE_PAIRE', 2);
// define('TYPE_BRELAN', 3);
// define('TYPE_CARRE', 4);

define('COMBINAISONS_POINTS', [
    'FULL' => 200,
    'CARRE' => 50,
    'BRELAN' => 20,
    'DOUBLE_PAIRE' => 10,
    'PAIRE' => 5,
    'NULL' => 1 
]);


class Poker
{
    private $mains;

    public function __construct($mains)
    {
        $this->mains = $mains;
    }

    public function getResult()
    {
        $score = 0;

        foreach ($this->mains as $main) {
            $combinaison = $this->getCombinaison($main);
            $score += $this->getScore($combinaison);
        }

        return $score;
    }


    /**
     * Permet de donner la  combinaison d'une main
     *
     */
    private function getCombinaison($main)
    {
        $triMain = array_count_values(array_count_values(explode(' ', $main)));

        // 2*2
        // 3 + 2 
        // 4
        // 2
        // 1 


        // Trier les tri main pui comparer à une chaine

        print_r($triMain);

        switch (true) {
            case array_intersect($triMain, [3, 2]) === [3, 2]:
               return COMBINAISONS_POINTS['FULL'];
                break;

            case array_intersect($triMain, [4]) === [4]:
                return COMBINAISONS_POINTS['CARRE'];
                break;
            case array_intersect($triMain, [3]) === [3]:
                return COMBINAISONS_POINTS['BRELAN'];
                break;
            case array_intersect($triMain, [2, 2]) === [2, 2]:
                return COMBINAISONS_POINTS['DOUBLE_PAIRE'];
                break;
            case array_intersect($triMain, [2]) === [2]:
                return COMBINAISONS_POINTS['PAIRE'];
                break;

            default:
            return COMBINAISONS_POINTS['FULL'];
                break;
        }

        die;

        return '';
    }

    /**
     * Retourne le score d'une main 
     *
     */
    public function getScore($combinaison)
    {
        return COMBINAISONS_POINTS[$combinaison];
    }
}
