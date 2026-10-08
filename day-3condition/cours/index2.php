<?php
// Lecture guidée
$montant = 50;
$estMembre = false;

if ($montant >= 50 || $estMembre) {
    echo "Livraison gratuite\n";
} else {
    if ($montant > 30) {
        echo "Livraison : 3 euros\n";
    } else {
        echo "Livraison : 6 euros\n";
    }
}
?>
