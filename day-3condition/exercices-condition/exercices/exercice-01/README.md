---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 01 - Admis ou recalé

## Objectif

Vous vous entraînez à lire et à modifier une condition `if` / `else`.

## Point de départ

Le fichier `index.php` contient un script qui affiche un résultat d'examen selon une note.

## Consigne

1. Lancez le script. Il affiche "Admis".
2. Changez la note pour que le script affiche "Recalé".
3. Le seuil d'admission passe de 10 à 12. Une note de 12 exactement donne "Admis".
4. Une note inférieure à 0 ou supérieure à 20 affiche "Note invalide".

## Résultat attendu

Testez votre script avec ces valeurs de `$note` :

| `$note` | Le terminal affiche |
| ------- | ------------------- |
| `15`    | `Admis`             |
| `12`    | `Admis`             |
| `11`    | `Recalé`            |
| `20`    | `Admis`             |
| `0`     | `Recalé`            |
| `25`    | `Note invalide`     |
| `-3`    | `Note invalide`     |

## Avant de modifier

En haut de `index.php`, écrivez en commentaire ce que fait le script actuel, en une ou deux phrases.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Relisez la partie "Comparer des valeurs" de la [fiche de cours](../../cours/cours.md#comparer-des-valeurs).

</details>

<details>
<summary>Indice 2</summary>

Pour l'étape 4 : une note est invalide dans deux cas. Relisez la partie "Combiner plusieurs tests" de la [fiche de cours](../../cours/cours.md#combiner-plusieurs-tests).

</details>
