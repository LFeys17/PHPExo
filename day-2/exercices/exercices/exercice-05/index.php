<?php
$argent = 3;
$billet20 = 0; 
$billet10 = 0;
$billet5 = 0;
$piece1 = 0;

if($argent >= 20){
    $billet20 = intval($argent / 20);
    $argent = $argent % 20;
}

if($argent >= 10){
    $billet10 = intval($argent / 10);
    $argent = $argent % 10 ;
}

if($argent >=5){
    $billet5 = intval($argent / 5);
    $argent = $argent % 5 ;
}
$piece1 = $argent;

echo "billet de 20 : " . $billet20 . "\nbillet de 10 : " . $billet10 . "\nbillet de 5 : " . $billet5 . "\npiece de 1 : " . $piece1;
?>
