<?php
$nombreDeTours = 5;
$tour = 1;

while ($tour <= $nombreDeTours) {
    if ( $tour == $nombreDeTours ){
        echo "Tour " . $tour . " sur " . $nombreDeTours . " dernier tour\n";
        }else{
        echo "Tour " . $tour . " sur " . $nombreDeTours . "\n";}
        $tour = $tour + 1;
}


echo "Fin du manège\n";
?>
