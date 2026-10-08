<?php
$nombre = 7;  // la table à afficher
$limite = 10; // le dernier multiplicateur
$result = $nombre * $limite;
$compteur = 0;


while ($compteur  <= $limite){
    echo $nombre . " x " . $compteur . " = " . $nombre * $compteur . "\n";
    $compteur = $compteur + 1;
}
?>
