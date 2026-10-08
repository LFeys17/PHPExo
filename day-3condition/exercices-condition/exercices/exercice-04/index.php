<?php
$temperature = 20; // en degrés
$pleut = false;

if ($temperature < 10){
    echo "Prenez un manteau\n";
}else {
if ($temperature >= 10 && $temperature <= 20){
    echo "Prenez un pull\n";}
}
if ($temperature > 20){
    echo "Un t-shirt suffit\n";
}
if ($pleut == true){
    echo "Et un parapluie!\n";
}

?>
