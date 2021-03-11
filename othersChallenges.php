<?php
require "vendor/autoload.php"; 

use Classes\Calendrier;

$data = [
    'jour_actuel' => 13,
    'cases_ouvertes' => [6, 3, 8, 5, 12, 1, 11, 9, 13, 4, 7, 10, 2],
    'resultat' => 'OK'
];
 
// $data = [
//     'jour_actuel' => 13,
//     'cases_ouvertes' => [7, 18, 20],
//     'resultat' => 'ERREUR'
// ];
 
dump($data);
 
$calendrier = new Calendrier($data['jour_actuel'], $data['cases_ouvertes']);
 
echo ($calendrier->getResult() == $data['resultat']) ? 'BON' : 'FAUX';