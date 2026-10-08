---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 01 - Les tours de manège

## Objectif

Vous vous entraînez à tracer et à modifier une boucle `while`.

## Point de départ

Le fichier `index.php` contient un script qui affiche les tours d'un manège, puis la fin du manège.

## Consigne

1. Lancez le script. Il affiche trois tours, puis "Fin du manège".
2. Le manège fait maintenant 5 tours.
3. Chaque ligne indique aussi le total : "Tour 1 sur 5".
4. La ligne du dernier tour se termine par ": dernier tour".

## Résultat attendu

Testez votre script avec ces valeurs de `$nombreDeTours` :

| `$nombreDeTours` | Le terminal affiche                                                                                                      |
| ---------------- | ------------------------------------------------------------------------------------------------------------------------ |
| `5`              | `Tour 1 sur 5`<br>`Tour 2 sur 5`<br>`Tour 3 sur 5`<br>`Tour 4 sur 5`<br>`Tour 5 sur 5 : dernier tour`<br>`Fin du manège` |
| `1`              | `Tour 1 sur 1 : dernier tour`<br>`Fin du manège`                                                                         |
| `0`              | `Fin du manège`                                                                                                          |

## Avant de modifier

Sur papier, tracez le script actuel dans un tableau : une ligne par test.

Puis, en haut de `index.php`, écrivez en commentaire ce que fait le script, en une ou deux phrases.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Pour le tableau, relisez la partie "Tracer une boucle" de la [fiche de cours](../../cours/cours.md#tracer-une-boucle).

</details>

<details>
<summary>Indice 2</summary>

Pour l'étape 4 : à l'intérieur du bloc, le script doit choisir entre deux affichages. Relisez la fiche [03 - Conditions](../../../03-conditions/cours/cours.md#comparer-des-valeurs).

</details>

<details>
<summary>Indice 3</summary>

Pour l'étape 4 : au dernier tour, que vaut `$tour` par rapport à `$nombreDeTours` ?

</details>
