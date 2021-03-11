<?php

require "vendor/autoload.php"; 

use Classes\Game;
use Classes\ShiFuMi;
use Classes\Vegeta;
use Classes\Objets;
use Classes\Sac;
use Classes\WallE;
use Classes\Map;
use Classes\Coffre;
use Classes\Armee;
use Classes\Troupe;
use Classes\Code;
use Classes\Batman;
use Classes\Bulma;


// Reste à traiter
// --------------------- Break the code #2 => CRYPTO_3
// --------------------- WALL-E #3 => WALL_E_3
// --------------------- Code César => SECRET_1
// --------------------- WALL-E #2 => WALL_E_2
// --------------------- Les nombres secrets de LOST => LOST_1
// --------------------- Collectionneur de figurines => COLLECTION_1
// --------------------- Team Pokemon => POKEMON_1
// --------------------- Coach de foot => FOOTBALL_1


// A retravailler
// --------------------- Attaque des Titans => ATTACK_OF_TITANS 
// --------------------- Challenge Lara Croft => TOMB_RAIDER 
// --------------------- Challenge Poker => POKER_1 
// --------------------- Retour vers le futur => FUTURE 
// ---------------------- Harry Potter et la chambre perdue => HARRY_POTTER 
// ---------------------- Cours Forrest, Cours ! => FORREST_1 
// ---------------------- Avengers => AVENGERS_1 
// ---------------------- Coach de foot #2 => FOOTBALL_2 




// --------------------- Challenge Pierre - Feuille - Ciseaux  => PIERRE_FEUILLE_CISEAUX

// Set de données
$data = ['coups' => 'FCFPPP'];
dump($data); 

$partie = new ShiFuMi($data['coups']);
$partie->fight();


$result = $partie->getResult();

// Test avec le set de données
if($result == 'CPCFFF'){
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : '. $result .'</h1>';
}







// --------------------- Challenge Vegeta => DBZ_1

// Set de données
$data = [
    'ennemis' => [232, 306, 614, 795, 942, 976, 987, 1020, 1153, 1258, 1285, 1304, 1395],
    'force_vegeta' => 175,
    'niveau' => 1
];

dump($data); 

$vegeta = new Vegeta($data['force_vegeta']);

foreach($data['ennemis'] as $ennemi){
    $vegeta->fight($ennemi);
}

// Test avec le set de données
if((string) $vegeta == '4188'){
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : '. $vegeta .'</h1>';
}







// --------------------- Challenge Sac => SAC_1

// Set de données
$data = [
    'sac' => 760,
    'objets' => [56, 57, 82, 41, 55, 59, 16, 24, 10, 33, 88, 74, 31, 73, 19, 11, 85, 72, 87, 30, 70, 12, 43, 52, 66, 34, 15, 42, 58, 17, 36, 69, 51, 28, 20, 77]
];

dump($data); 

$objets = new Objets($data['objets']);
$sac = new Sac($data['sac']);

$remplissageSac = 0;

$sac->remplir($objets->triPlusGrand());
$sac->remplir($objets->triPlusPetit());

// Test avec le set de données
if ((string) $sac == 756) {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $sac . '</h1>';
}








// --------------------- Challenge Wall-E => WALL_E

// Set de données
$data = [
    'force' => 19,
    'vitesse' => 14,
    'batterie' => 87,
    'dechets' => [11, 14, 31, 13, 5, 12, 6, 25, 13, 25]
];

dump($data);

$wallE = new WallE($data['force'], $data['vitesse'], $data['batterie']);

foreach($data['dechets'] as $dechetWeight){
    $wallE->tentativeTraitementDechet($dechetWeight);
}

// Test avec le set de données
if ((string) $wallE == 32) {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $wallE . '</h1>';
}







// --------------------- Challenge Pixels de couleurs => PAINT

// Set de données
$data = [
    'map' => ["w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "r", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "r", "w", "w", "r", "w", "w", "w", "w", "w", "w", "r", "w", "w", "w", "r", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "w", "r", "w", "w", "w", "w", "w", "w", "w", "r", "w", "w", "w", "r", "w", "w", "w", "w", "w", "w", "w", "w", "w", "r", "w", "w", "w", "w"]
];


// Test unitaires 
$start = ['w', 'r', 'w', 'r'];
$tests = [
    ['position' => 0, 'attendu' => true],
    ['position' => 1, 'attendu' => true],
    ['position' => 2, 'attendu' => true],
    ['position' => 3, 'attendu' => true],
    ['position' => 4, 'attendu' => true]
];

dump($data);

foreach ($tests as $test) {
    $map = new Map($start);
    $result =  $map->paintBlue($test['position']);

    if ($result === $test['attendu']) {
        echo 'OK' . '<br />';
    } else {
        echo 'KO' . '<br />';
    }
}

$map = new Map($data['map']);

$map->paintAllBlue();

// Test avec le set de données
if ((string) $map->getCountColor('b') == 26) {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $map->getCountColor('b') . '</h1>';
}







// --------------------- Challenge braquage du coffre => CRYPTO_2

// Set de données
$data = [
    'depart' => 739124,
    'chemin' => ["-------", "++++++", "++++++", "++++++", "++++++", "+++++", "+++++", "+++++", "+++++", "++++", "++++", "+++", "+++", "+++", "++", "++", "++", "++", "+"]
];

dump($data);

$coffre = new Coffre($data['depart'], $data['chemin']);
$result = $coffre->getCombinaison();

dump($result);

// Test avec le set de données
if ($result == 181465) {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $result . '</h1>';
}











// --------------------- Challenge break the code => CRYPTO_1

// Set de données
$data = [
    'mots' => ["IOLG", "ZOAG", "IPKG", "IOIG", "IHLG", "IOLS", "ECNI", "IOLG", "IOCN", "IOSC"]
];

dump($data);

$coffre = new Code($data['mots']);

$result = $coffre->getResult();


// Test avec le set de données
if ($result == 'IOLG') {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $result . '</h1>';
}





// ---------------------- Challenge Daenerys => GOT_1

// Set de données
$data = ['armee' => 6557];

dump($data); 

$armee = new Armee($data['armee']);

$dragons = new Troupe(3, 1000, 3); 
$immacules = new Troupe(200, 15, 2); 
$dorthrakis = new Troupe(5000, 1, 1); 

$armee->addTroupe($dragons);
$armee->addTroupe($immacules);
$armee->addTroupe($dorthrakis);

$armee->fight();

$result = $armee->getResult();

// Test avec le set de données
if ($result == '2_151_2292') {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $result . '</h1>';
}






// ---------------------- Batmobile et IA => BATMAN_1 

// Set de données
$data['ennemis'] =
["x:32 pv:42", "x:18 pv:36", "x:23 pv:30", "x:15 pv:20", "x:30 pv:48"];

dump($data);

$batman = new Batman($data['ennemis']);

$batman->formateDatas();

$batman->createInstruction();

$result = $batman->getResult();


// Test avec le set de données
if ($result == 'DDDDDDDDDDDDDDDFFDDDFFFFDDDDDFFFDDDDDDDFFFFFDDFFFFF') {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $result . '</h1>';
}







// ---------------------- Bulma et la Capsule Corp. => DBZ_2

$data = [
    'objets' => ["VCPTFULQN-529", "QSZFYLLHXTCF-511", "QOMPRGXTAGIK-291", "JKXXYDNW-386", "WQDZVDKHE-234", "QQFYRMALJNMN-263", "KYLSFYRZROEA-483", "QSXPOZ-189", "MEYWKWHM-351", "IIOOCZGHFFLA-419", "WGCTYRJGOCL-467", "SZYCRB-364", "MGOHTZBR-244", "ZQIOPEQMNYU-227", "DTCLUJUX-346", "EIGWIZDFPQPW-204", "JOZYVZBY-509", "PRMIJTHZ-479", "OZQJHNALUXZY-274", "VVEOTZ-436", "SEUIFRVYORU-522", "OJQYJLP-297", "ZDTVNNHIQQE-454", "ZOWKUKQE-228", "AQOJBGTZ-307", "CCZCJY-183", "BNALMMG-544", "HNUKCIBA-456", "TXACHKVFADF-496", "HKGZWVBCOGRY-292", "VGHAXKA-486", "CSBGENUNZML-227", "RHOQWVGLI-510", "VWVVDX-219", "QDFIRP-337", "BSXXHX-288", "GEYKKR-210", "RRZOBQYO-540", "YKXNFFH-252", "LDXNPZXGRLGN-224", "XEVACPQ-546", "FRTQIJUGCF-458", "VXQTVDDYAZGG-166", "IUPMNEYRL-513", "JSZCYCFBYWTY-205", "AJMKVPBABUC-455", "KERFZBJHD-242", "IGGMGA-511", "SYKTDVISLTHH-106", "MNEYGSM-379", "GILMELIH-141", "CWIHAH-521", "XLUNIXHGWJKG-299", "YTPZFRGHKOG-294", "UCLHWALELA-250", "ELLIFOW-312", "TCJXAHXKRWSA-468", "ZRTKEWYF-123", "QIKYIPS-231", "KQUADNBX-305", "AFOBWXEWVRRA-337", "WQSOKLKIQ-134", "FQUREVL-271", "LXMEBKGYZ-102", "GUEFNU-548", "LYUAESMSEDKN-452", "UMMUVUQU-159", "TWZFQZX-124", "JKAEJDXOJV-200", "IGXHJNHJVS-541"],

    'capsules' => ["ZLFP-22", "UCLA-25", "INUP-14", "SYHH-10", "CZUV-16", "YKFH-37", "BLNY-55", "YKFH-25", "FPDI-27", "GJGO-13"]
];

dump($data);

$bulma = new Bulma($data['objets'], $data['capsules']);

$result = $bulma->getResult();

dump($result);

if ($result == 608) {
    echo '<h1 style="color: green">Gagné</h1>';
} else {
    echo '<h1 style="color: red">KO : ' . $result  . '</h1>';
}




