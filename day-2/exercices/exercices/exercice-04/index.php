<?php
$duree = 135; // en minutes
$heures = intdiv($duree, 60);

echo $duree . " min = " . $heures ." h \n";


$duree2 = 135;
$heures2 = intval($duree2 / 60);
$minutes2 = $duree2 % 60;

echo $heures2 . "h" . $minutes2 . "min" ;

?>
