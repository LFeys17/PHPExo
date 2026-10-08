---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-06
---

# Exercice 04 - Durée d'un film

## Objectif

Vous vous entraînez à combiner le modulo avec d'autres calculs.

## Point de départ

Le fichier `index.php` contient une variable : la durée d'un film, en minutes. À vous d'écrire la suite.

## Consigne

Une application de cinéma affiche la durée des films en heures et en minutes. Une heure compte 60 minutes.

1. Le script affiche les minutes qui restent après les heures complètes : "Minutes : 15".
2. Le script affiche aussi le nombre d'heures complètes : "Heures : 2".
3. Au lieu de ces deux lignes, le script affiche une seule phrase : "135 min = 2 h 15 min".

## Résultat attendu

Testez votre script avec ces valeurs de `$duree` :

| `$duree` | Le terminal affiche    |
| -------- | ---------------------- |
| `135`    | `135 min = 2 h 15 min` |
| `200`    | `200 min = 3 h 20 min` |
| `60`     | `60 min = 1 h 0 min`   |
| `45`     | `45 min = 0 h 45 min`  |
| `0`      | `0 min = 0 h 0 min`    |

## Avant de coder

En haut de `index.php`, écrivez en commentaires les étapes de votre programme, en français.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Pour l'étape 1, relisez la partie "Garder le reste d'une division" de la [fiche de cours](../../cours/cours.md#garder-le-reste-dune-division).

</details>

<details>
<summary>Indice 2</summary>

Pour l'étape 2 : 135 divisé par 60 donne 2.25, et non 2. Que faudrait-il retirer à 135 pour que la division tombe juste ?

</details>
