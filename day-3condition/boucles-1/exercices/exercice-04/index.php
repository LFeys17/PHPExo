<?php
$maximum = 20; // le dernier nombre à examiner
$compteur = 0;
$nombrePair = 0;
$impair = 1;

while ($compteur <= $maximum) {
    echo $compteur . "\n";
    $compteur = $compteur + 2;

    if (!$nombrePair){ $nombrePair = $nombrePair % 2;
echo "Nombres pairs affichés : " . $nombrePair "\n"}
}

?>
