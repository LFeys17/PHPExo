---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 04 - Conseil vestimentaire

## Objectif

Vous vous entraînez à traiter plus de deux cas, et à combiner des conditions indépendantes.

## Point de départ

Le fichier `index.php` contient deux variables : la température du jour, et s'il pleut ou non. À vous d'écrire la suite.

## Consigne

Le script conseille une tenue selon la météo.

1. En dessous de 10 degrés, le script affiche "Prenez un manteau".
2. De 10 à 20 degrés, il affiche "Prenez un pull".
3. Au-dessus de 20 degrés, il affiche "Un t-shirt suffit".
4. S'il pleut, le script affiche en plus, sur une seconde ligne, "Et un parapluie !".

## Résultat attendu

Testez votre script avec ces valeurs :

| `$temperature` | `$pleut` | Le terminal affiche                          |
| -------------- | -------- | -------------------------------------------- |
| `5`            | `false`  | `Prenez un manteau`                          |
| `10`           | `false`  | `Prenez un pull`                             |
| `20`           | `false`  | `Prenez un pull`                             |
| `21`           | `false`  | `Un t-shirt suffit`                          |
| `25`           | `true`   | `Un t-shirt suffit` puis `Et un parapluie !` |
| `5`            | `true`   | `Prenez un manteau` puis `Et un parapluie !` |

## Avant de coder

En haut de `index.php`, écrivez en commentaires les étapes de votre programme, en français.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Commencez par deux cas seulement (manteau ou pull), testez, puis ajoutez le troisième.

</details>

<details>
<summary>Indice 2</summary>

Pour trois cas, relisez la partie "Placer une condition dans une autre" de la [fiche de cours](../../cours/cours.md#placer-une-condition-dans-une-autre).

</details>

<details>
<summary>Indice 3</summary>

Le parapluie ne dépend pas de la température. Doit-il vraiment se trouver dans les mêmes blocs ?

</details>
