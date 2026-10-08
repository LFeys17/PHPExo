---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 03 - L'attraction

## Objectif

Vous vous entraînez à écrire des conditions qui combinent plusieurs tests.

## Point de départ

Le fichier `index.php` contient trois variables qui décrivent une personne : sa taille, son âge, et si elle est accompagnée d'un adulte. À vous d'écrire la suite.

## Consigne

Un parc d'attractions contrôle l'accès à un manège.

1. Une personne qui mesure au moins 120 cm et qui a au moins 8 ans peut monter : le script affiche "Accès autorisé".
2. Une personne de moins de 120 cm ne peut pas monter, quel que soit son âge : "Accès refusé : taille insuffisante".
3. Une personne assez grande mais de moins de 8 ans ne peut pas monter : "Accès refusé : âge insuffisant".
4. Une personne accompagnée d'un adulte peut monter dès 6 ans. La taille reste obligatoire.

## Résultat attendu

Testez votre script avec ces valeurs :

| `$taille` | `$age` | `$estAccompagne` | Le terminal affiche                  |
| --------- | ------ | ---------------- | ------------------------------------ |
| `130`     | `9`    | `false`          | `Accès autorisé`                     |
| `110`     | `9`    | `false`          | `Accès refusé : taille insuffisante` |
| `130`     | `7`    | `false`          | `Accès refusé : âge insuffisant`     |
| `130`     | `7`    | `true`           | `Accès autorisé`                     |
| `130`     | `5`    | `true`           | `Accès refusé : âge insuffisant`     |
| `120`     | `8`    | `false`          | `Accès autorisé`                     |
| `130`     | `6`    | `true`           | `Accès autorisé`                     |

## Avant de coder

En haut de `index.php`, écrivez en commentaires les étapes de votre programme, en français.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Avancez étape par étape : codez l'étape 1, testez, puis passez à la suivante.

</details>

<details>
<summary>Indice 2</summary>

Tester la taille en premier simplifie la suite. Relisez la partie "Placer une condition dans une autre" de la [fiche de cours](../../cours/cours.md#placer-une-condition-dans-une-autre).

</details>

<details>
<summary>Indice 3</summary>

Pour l'étape 4 : l'âge est suffisant dans deux cas. Soit la personne a au moins 8 ans, soit elle est accompagnée et a au moins 6 ans.

</details>
