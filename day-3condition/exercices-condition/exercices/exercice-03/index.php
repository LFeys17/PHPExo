<?php
$taille = 130; // en centimètres
$age = 5;
$estAccompagne = true;

if ($taille >= 120 && $age >= 8){
    echo "Accès autorisé\n";
} else {
    if ($estAccompagne == true && $age >= 6){
        echo "Accès autorisé\n";
    } else {
        if ($age < 8){
              echo  "Accès refusé : âge insuffisant";
        }
        if ($taille < 120){
            echo "Accès refusé : taille insuffisante";
        }
    }
}    
    
/////////////////////////////////////////////////////

/* 
$taille = 130; // en centimètres
$age = 5;
$estAccompagne = true;


if ($taille < 120){
  echo "Trop petit";
} else {
if ($age >= 8 || ($estAccompagne && $age >= 6)){
  echo "OK";
  } else {
   echo "Refusé";
}
 }

/*




?>