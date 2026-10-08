---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-06
---

# Exercice 02 - Tours de piste

## Objectif

Vous vous entraînez à enchaîner plusieurs calculs dans le bon ordre.

## Point de départ

Le fichier `index.php` contient trois variables : les temps de trois tours de piste, en secondes. À vous d'écrire la suite.

## Consigne

Une coureuse chronomètre ses tours de piste. Elle veut connaître son temps total et son temps moyen par tour.

1. Le script affiche le temps total des trois tours : "Total : 183 s".
2. Le script affiche ensuite le temps moyen d'un tour : "Moyenne : 61 s". La moyenne, c'est le total divisé par le nombre de tours.
3. La coureuse fait un quatrième tour, en 57 secondes. Le script en tient compte : "Total : 240 s", puis "Moyenne : 60 s".

## Résultat attendu

Testez votre script, avec ses quatre tours, avec ces valeurs :

| Tour 1 | Tour 2 | Tour 3 | Tour 4 | Le terminal affiche                      |
| ------ | ------ | ------ | ------ | ---------------------------------------- |
| `62`   | `58`   | `63`   | `57`   | `Total : 240 s` puis `Moyenne : 60 s`    |
| `55`   | `65`   | `52`   | `48`   | `Total : 220 s` puis `Moyenne : 55 s`    |
| `60`   | `60`   | `60`   | `60`   | `Total : 240 s` puis `Moyenne : 60 s`    |
| `60`   | `61`   | `60`   | `60`   | `Total : 241 s` puis `Moyenne : 60.25 s` |

## Avant de coder

En haut de `index.php`, écrivez en commentaires les étapes de votre programme, en français.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Avancez étape par étape : codez l'étape 1, testez, puis passez à la suivante.

</details>

<details>
<summary>Indice 2</summary>

Si la moyenne est fausse, relisez la partie "Calculer avec des variables" de la [fiche de cours](../../cours/cours.md#calculer-avec-des-variables).

</details>

<details>
<summary>Indice 3</summary>

Pour l'étape 3 : combien de lignes avez-vous dû modifier ? Un résultat rangé dans une variable peut servir plusieurs fois.

</details>
