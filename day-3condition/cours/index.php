<?php
// 1 - Choisir entre deux chemins : if et else
$estAbonne = true;  //  un booléen : true ou false

if ($estAbonne) { // if teste ce qui est entre parenthèses
    echo "Tarif : 5euros\n";   //  bloc exécuté si le test vaut true 
    }
    else { // sinon, c'est ce bloc qui s'exécute
    echo "Tarif : 8 euros\n";}



    ///////////////////////////////////////////////





$age = 30;
$estAbonne = true; 

if ($age >= 65 || $estAbonne) { 
    echo "Tarif : 5 euros\n";   }
    else { 
    echo "Tarif : 8 euros\n";}

?>