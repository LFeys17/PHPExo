---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-06
---

# Exercice 03 - Celsius en Fahrenheit

## Objectif

Vous vous entraînez à corriger un calcul et à tenir compte de la priorité des opérateurs.

## Point de départ

Le fichier `index.php` contient un script qui commence à convertir une température en degrés Celsius vers des degrés Fahrenheit.

## Consigne

Pour convertir des degrés Celsius en degrés Fahrenheit, on multiplie par 9, on divise par 5, puis on ajoute 32.

1. Lancez le script. Il affiche 36 : le calcul n'est pas terminé.
2. Complétez le calcul pour que 20 °C donne 68 °F.
3. Au lieu du nombre seul, le script affiche une phrase : "20 °C = 68 °F".
4. Vérifiez tous les cas du résultat attendu.

## Résultat attendu

Testez votre script avec ces valeurs de `$celsius` :

| `$celsius` | Le terminal affiche |
| ---------- | ------------------- |
| `20`       | `20 °C = 68 °F`     |
| `0`        | `0 °C = 32 °F`      |
| `100`      | `100 °C = 212 °F`   |
| `37`       | `37 °C = 98.6 °F`   |
| `-40`      | `-40 °C = -40 °F`   |

## Avant de modifier

En haut de `index.php`, écrivez en commentaire ce que fait le script actuel, en une ou deux phrases.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Relisez la partie "Calculer avec des variables" de la [fiche de cours](../../cours/cours.md#calculer-avec-des-variables).

</details>

<details>
<summary>Indice 2</summary>

Si un seul cas ne marche pas, refaites le calcul à la main avec ce nombre-là, une opération après l'autre, dans l'ordre où PHP les effectue.

</details>
