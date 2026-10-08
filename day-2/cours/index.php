<?php
$prixMenu = 12;
 // $convives = 4;
$convives = 2; // remplace le "convives" d'avant 
$total = $prixMenu * $convives;
$total = $total + 5;

echo "Total : " . $total . " euros\n";

$convives = 2;

echo "Total : " . $total . " euros\n";
?>