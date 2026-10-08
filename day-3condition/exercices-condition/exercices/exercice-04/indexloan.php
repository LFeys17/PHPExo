<?php 
$tempature = 25; //degres
$pleut= true; // bool

if($tempature < 10){
    echo "Prenez un manteau";
}
else if ($tempature <= 20){
    echo "Prenez un pull";
}
else{
   echo "Un t-shirt suffit";
}





if($pleut) echo " Et un parapluie !";
?>