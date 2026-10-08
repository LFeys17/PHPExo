/* ajout d'un tour
ajout d'une variable total et moyenne */


<?php
$tour1 = 60; // en secondes
$tour2 = 61;
$tour3 = 60;
$tour4 = 60;
$total = $tour1 + $tour2 + $tour3 + $tour4;
$moyenne = $total / 4;

echo "Total : " . $total;
echo " Moyenne : " . $moyenne;

?>
