<?php 

include('Classes/Game.php');

include('Classes/Vegeta.php');
include('Classes/Sac.php');
include('Classes/WallE.php');
include('Classes/Map.php');
include('Classes/Coffre.php');
include('Classes/Code.php');
include('Classes/Poker.php');
include('Classes/Daenerys.php');
include('Classes/LaraCroft.php');
include('Classes/ShiFuMi.php');
include('Classes/Batman.php');
include('Classes/AttaqueTitans/Titan.php');
include('Classes/AttaqueTitans/Levy.php');
include('Classes/AttaqueTitans/Habitation.php');
include('Classes/AttaqueTitans/Titans.php');
include('Classes/AttaqueTitans/Habitations.php');


// ---------------------- Challenge Poker => POKER_1 !!!!!!!!!!!!!!!!!!!! Challenge à retravailler

// Set de données
// $data = [
//     'mains' => ["10 as as 6 10", "5 5 roi 5 5", "9 2 5 dame 10", "8 roi 8 3 10", "valet as 8 3 9", "dame 3 as 7 5", "as 7 10 roi 8", "7 6 2 dame 10"]
// ];

// dump($data);

// $coffre = new Poker($data['mains']);

// $result = $coffre->getResult();

// Test avec le set de données
// if ($result == 220) {
//     echo '<h1 style="color: green">Gagné</h1>';
// } else {
//     echo '<h1 style="color: red">KO : ' . $result . '</h1>';
// }





// ---------------------- Challenge Lara Croft => TOMB_RAIDER !!!!!!!!!!!!!!!!!!!! Challenge à retravailler

// $data = ["0:A 1:A", "1:A 2:A 6:V 7:V 8:V", "0:A 1:A 3:J 6:J 7:V 8:L", "0:A 1:A 2:L 3:J 6:V 8:L", "1:A 2:L 8:L", "1:A 5:L 6:J 7:V 8:V"];

// dump($data);

// $coffre = new LaraCroft($data);

// $result = $coffre->getResult();

// if ($result == 'HHBHGHGDDHDDBGD') {
//     echo '<h1 style="color: green">Gagné</h1>';
// } else {
//     echo '<h1 style="color: red">KO : ' . $result . '</h1>';
// }





// ---------------------- Attaque des Titans => ATTACK_OF_TITANS !!!!!!!!!!!!!!!!!!!! Challenge à retravailler


// $data = [
//     'titans' => ["25;6;1352", "17;8;1228", "22;5;992", "19;7;1205", "15;5;679"],
//     'habitations' => ["8;49", "23;47", "10;27"],
//     'gaz' => 1463
// ];



// $levy = new Levy($data['gaz']);

// $habitations = [];
// foreach($data['habitations'] as $habitation){
//     array_push($habitations, new Habitation($habitation));
// }

// $habitations = new Habitations($data['habitations']);

// $titans = new Titans($data['titans']);

// $titan = $titans->findBiggestTitan();

// dump($habitations->findBestHabitation($titan));



// // dd($data);
// dump($titan);
// dump($habitations);	











// ---------------------- Retour vers le futur => FUTURE !!!!!!!!!!!!!!!!!!!! Challenge à retravailler


// $data = [
//     'depart' => 1985,
//     'anniversaire' => "05-21",
//     'sauts' => ["1998-11-12", "1971-06-11", "1996-05-24", "2008-04-30", "1989-04-29"]
// ];


// function timestampToYear($timestamp){
// 	return date('Y', $timestamp);
// }

// $decalage = 0;

// foreach ($data['sauts'] as $saut) {
// 	$timestampCurrent = strtotime($saut); 
// 	$timestampCurrentMois = strtotime('2000-'. date('m-d', $timestampCurrent));
// 	$timestampAnniv = strtotime('2000-'. $data['anniversaire']);
// 	$firstTimestamp = strtotime($data['depart'] .'-01-01');
// 	$oneYear = strtotime('1970-01-01 +1 year');

// 	if($timestampCurrent > $firstTimestamp){
// 		$yearFinished = $timestampAnniv > $timestampCurrentMois ? 1 : 0;
// 		$decalage += (timestampToYear($timestampCurrent) - timestampToYear($firstTimestamp)) - $yearFinished;
// 	} else {
// 		$yearFinished = $timestampAnniv < $timestampCurrentMois ? 1 : 0;
// 		$decalage -=  (timestampToYear($firstTimestamp) - timestampToYear($timestampCurrent)) - $yearFinished;
// 	}
// }


// if ($decalage == 36) {
//     echo '<h1 style="color: green">Gagné</h1>';
// } else {
//     echo '<h1 style="color: red">KO : ' . $decalage . '</h1>';
// }














// ---------------------- Harry Potter et la chambre perdue => HARRY_POTTER !!!!!!!!!!!!!!!!!!!! Challenge à retravailler


// $ingredients = [
//     'resistance' => 35,
//     'queue_lezard' => 13,
//     'oreille_souris' => 7,
//     'petale_rose' => 13,
//     'nuage_tenebreux' => 17,
//     'poussiere_fee' => 15,
//     'eau_jouvence' => 12,
//     'bave_crapaud' => 8,
// ];

// $result = 11;

// $nbPotionTotal = 0;

// dump($ingredients);

// define(
//     'RECETTES',
//     [
//         'RECETTE_POTION_ACIDE' => [
//             'queue_lezard' => 3,
//             'oreille_souris' => 2,
//             'petale_rose' => 1,
//         ],
//         'RECETTE_POTION_DE_FOUDRE' => [
//             'nuage_tenebreux' => 2,
//             'poussiere_fee' => 1,
//         ],
//         'RECETTE_POTION_DE_GIVRE' => [
//             'eau_jouvence' => 3,
//             'bave_crapaud' => 1
//         ]
//     ]
// );

// define(
//     'EFFETS',
//     [
//         'RECETTE_POTION_ACIDE' => 2,
//         'RECETTE_POTION_DE_FOUDRE' => 3,
//         'RECETTE_POTION_DE_GIVRE' => 1
//     ]
// );


// $initialResisance = $ingredients['resistance'];


// function numberOfPotionsAchievable($ingredients, $recette)
// {
//     $maxIngredients = [];
//     foreach($recette as $key => $quantite){
//         if(!isset($ingredients[$key]) || $ingredients[$key] < $quantite){
//             return 0;
//         }
//         $maxIngredients[$key] = floor($ingredients[$key] / $quantite);
//     }

//     return min($maxIngredients);
// }

// function maxPotions($resistance, $potions, $effet){
//     if($potions * $effet <= $resistance){
//         return $potions;
//     }
//     return floor($resistance / $potions);
// }


// $nbRecettes = [];
// foreach(RECETTES as $key => $recette){
//     $nbRecettes[$key] = numberOfPotionsAchievable($ingredients, $recette);
// }

// dump($nbRecettes);

// $maxPotions = [];
// foreach($nbRecettes as $key => $value){
//     $maxPotions[$key] = maxPotions($ingredients['resistance'], $value, EFFETS[$key]);
//     $ingredients['resistance'] -= $maxPotions[$key];
// }


// dump($initialResisance-$ingredients['resistance']);


// TEST ---------------------------------------------------------------

// $ingredients = [
//     'queue_lezard' => 3,
//     'oreille_souris' => 2,
//     'petale_rose' => 1,
// ];

// if (numberOfPotionsAchievable($ingredients, RECETTES['RECETTE_POTION_ACIDE']) == 1) {
//     echo 'Test passé';
// } else {
//     echo 'Test non passé';
// }


// $ingredients = [
//     'queue_lezard' => 6,
//     'oreille_souris' => 4,
//     'petale_rose' => 2,
// ];

// if (numberOfPotionsAchievable($ingredients, RECETTES['RECETTE_POTION_ACIDE']) == 2) {
//     echo 'Test passé';
// } else {
//     echo 'Test non passé';
// }

// $ingredients = [
//     'queue_lezard' => 0,
//     'oreille_souris' => 5,
//     'petale_rose' => 1,
// ];

// if (numberOfPotionsAchievable($ingredients, RECETTES['RECETTE_POTION_ACIDE']) >= 0) {
//     echo 'Test passé';
// } else {
//     echo 'Test non passé';
// }


// $ingredients = [];

// if (numberOfPotionsAchievable($ingredients, RECETTES['RECETTE_POTION_ACIDE']) >= 0) {
//     echo 'Test passé';
// } else {
//     echo 'Test non passé';
// }







// ---------------------- Cours Forrest, Cours ! => FORREST_1 !!!!!!!!!!!!!!!!!!!! Challenge à retravailler


// $data = [
//     'kms' => [14, 104, 150],
//     'runners' => [2, 2, 4],
//     'stop' => 244,
// ];

// $kms = 0;

// foreach($data['runners'] as $key => $runner){
//     $kms += $runner*($data['stop']-$data['kms'][$key]);
// }
// $kms += $data['stop'];


// if ($kms == 1360) {
//     echo '<h1 style="color: green">Gagné</h1>';
// } else {
//     echo '<h1 style="color: red">KO : ' . $kms . '</h1>';
// }














// ---------------------- Avengers => AVENGERS_1 !!!!!!!!!!!!!!!!!!!! Challenge à retravailler

// $data = [
//     'iron_man' => 4,
//     'spiderman' => 3,
//     'captain_america' => 4,
//     'thor' => 3,
//     'thanos' => 169,
// ];

// $puissance_thanos = $data['thanos']; 
// $puissance_ironMan = $data['iron_man']*3+10;
// $puissance_spiderMan = $data['spiderman']*4+5;
// $puissance_captainAmerica = $data['captain_america']*3+7;
// $puissance_thor = $data['thor']*4+20;
// $combat = true;
// $puissance_total=0;
// $augmentation=0;
// $tour=0;

// while($combat AND $tour<900){
// 	$tour++;
// 	$puissance_total = $puissance_ironMan + $puissance_spiderMan + $puissance_captainAmerica + $puissance_thor;
// 	if($puissance_total>$puissance_thanos){
// 		$combat = false;
// 	}
// 	if(!($puissance_total>$puissance_thanos)){
// 		switch($augmentation){
// 			case 0:
// 				$data['iron_man']++;
// 				$puissance_ironMan = ($data['iron_man'])*3+10;
// 			break;
// 			case 1:
// 				$data['spiderman']++;
// 				$puissance_spiderMan = ($data['spiderman'])*4+5;
// 			break;
// 			case 2:
// 				$data['captain_america']++;
// 				$puissance_captainAmerica = ($data['captain_america'])*3+7;
// 			break;
// 			case 3:
// 				$data['thor']++;
// 				$puissance_thor = ($data['thor'])*4+20;
// 			break;
// 			default:
// 				echo 'Erreur augmentation puissance';
// 			break;
// 		}
// 		$augmentation++;
// 		if($augmentation==4){
// 			$augmentation=0;
// 		}
// 	}
// 	if($puissance_total <= $puissance_thanos){
// 		$etat = '<span style="color : red;">KO</span>';
// 	} else {
// 		$etat = '<span style="color : green;">OK</span>';
// 	}
// 	echo 'Tour ' . $tour . ' __________ Avengers (' . $puissance_total . ') ---- VS ---- Thanos (' . $puissance_thanos . ') ====> ' . $etat . '<br />';
// }


// if ($tour == 24) {
//     echo '<h1 style="color: green">Gagné</h1>';
// } else {
//     echo '<h1 style="color: red">KO : ' . $kms . '</h1>';
// }















// ---------------------- Coach de foot #2 => FOOTBALL_2 !!!!!!!!!!!!!!!!!!!! Challenge à retravailler

// $data = [
//     'dispositif' => "4-5-1",
//     'forces' => [5, 14, 10, 38, 4, 30, 6, 27, 33, 26, 8, 7, 32, 11, 18, 1, 3, 28, 24, 13, 23],
//     'postes' => ["G", "A", "G", "M", "M", "A", "D", "D", "A", "M", "G", "M", "M", "D", "M", "M", "A", "A", "D", "G", "A"]
// ];


// arsort($data['forces']);

// $defenseur = 0;
// $milieu=0;
// $attaquant=0;
// $gardien=0;
	

// $data['dispositif'] = explode('-', $data['dispositif']);
// $data['dispositif'][3] = 1;
// dump($data);

// foreach($data['forces'] as $key => $force){
//     switch($data['postes'][$key]){
//         case 'D':
//             if(!($defenseur == $data['dispositif'][0])){
//                 $compo[$force] = $key;
//                 $defenseur++;
//             }
//         break;
//         case 'M':
//             if(!($milieu == $data['dispositif'][1])){
//                 $compo[$force] = $key;
//                 $milieu++;
//             }
//         break;
//         case 'A':
//             if(!($attaquant == $data['dispositif'][2])){
//                 $compo[$force] = $key;
//                 $attaquant++;
//             }
//         break;
//         case 'G':
//             if(!($gardien == $data['dispositif'][3])){
//                 $compo[$force] = $key;
//                 $gardien++;
//             }
//         break;
//     }
// }

// dump($compo);

// krsort($compo);
// $compo = implode('-', $compo);

// if($defenseur != $data['dispositif'][0] || 
//     $milieu != $data['dispositif'][1] ||
//     $attaquant != $data['dispositif'][2] || 
//     $gardien != $data['dispositif'][3]){
//         $game->push($reponse = ['reponse' => 'KO']);
// }
// echo $compo;

// $reponse =['reponse' => $compo];

//retrier le tableau final 
//Ajouter les - 
//Voir la possibilité KO



// if ($compo == 3-8-12-7-9-18-14-19-13-11-6) {
//     echo '<h1 style="color: green">Gagné</h1>';
// } else {
//     echo '<h1 style="color: red">KO : ' . $kms . '</h1>';
// }

