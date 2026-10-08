---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 03 - La table de multiplication

## Objectif

Vous vous entraînez à écrire une boucle `while` qui utilise son compteur dans un calcul.

## Point de départ

Le fichier `index.php` contient deux variables : le nombre dont on veut la table, et le dernier multiplicateur. À vous d'écrire la suite.

## Consigne

Ada révise ses tables de multiplication.

1. Le script affiche les nombres de 1 à `$limite`, un par ligne.
2. Chaque ligne affiche une multiplication et son résultat : "7 x 1 = 7".
3. Après la table, le script affiche "Fin de la table de 7".

## Résultat attendu

Testez votre script avec ces valeurs :

| `$nombre` | `$limite` | Le terminal affiche                                                                                                                                                                    |
| --------- | --------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `7`       | `10`      | `7 x 1 = 7`<br>`7 x 2 = 14`<br>`7 x 3 = 21`<br>`7 x 4 = 28`<br>`7 x 5 = 35`<br>`7 x 6 = 42`<br>`7 x 7 = 49`<br>`7 x 8 = 56`<br>`7 x 9 = 63`<br>`7 x 10 = 70`<br>`Fin de la table de 7` |
| `9`       | `3`       | `9 x 1 = 9`<br>`9 x 2 = 18`<br>`9 x 3 = 27`<br>`Fin de la table de 9`                                                                                                                  |
| `7`       | `1`       | `7 x 1 = 7`<br>`Fin de la table de 7`                                                                                                                                                  |
| `7`       | `0`       | `Fin de la table de 7`                                                                                                                                                                 |

## Avant de coder

En haut de `index.php`, écrivez en commentaires les étapes de votre programme, en français.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Avancez étape par étape : codez l'étape 1, testez, puis passez à la suivante.

</details>

<details>
<summary>Indice 2</summary>

Pour l'étape 1 : il faut une variable de plus, qui compte les itérations. Relisez la partie "Tracer une boucle" de la [fiche de cours](../../cours/cours.md#tracer-une-boucle).

</details>

<details>
<summary>Indice 3</summary>

Pour l'étape 2 : à chaque itération, le compteur a une nouvelle valeur. Le résultat se calcule avec cette valeur.

</details>
