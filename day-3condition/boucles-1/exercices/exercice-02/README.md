---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 02 - Le minuteur

## Objectif

Vous vous entraînez à modifier le départ, le test et le pas d'une boucle `while`.

## Point de départ

Le fichier `index.php` contient un script qui affiche le décompte d'un minuteur de cuisine, puis une sonnerie.

## Consigne

1. Lancez le script. Il affiche de "5 s" à "1 s", puis "Dring !".
2. Le minuteur part maintenant de 10 secondes.
3. Le décompte affiche aussi "0 s", juste avant "Dring !".
4. Le minuteur descend de 2 en 2 : "10 s", "8 s", "6 s"…

## Résultat attendu

Testez votre script avec ces valeurs de départ de `$secondes` :

| `$secondes` | Le terminal affiche                                              |
| ----------- | ---------------------------------------------------------------- |
| `10`        | `10 s`<br>`8 s`<br>`6 s`<br>`4 s`<br>`2 s`<br>`0 s`<br>`Dring !` |
| `5`         | `5 s`<br>`3 s`<br>`1 s`<br>`Dring !`                             |
| `0`         | `0 s`<br>`Dring !`                                               |

## Avant de modifier

Sur papier, tracez le script actuel dans un tableau : une ligne par test.

Puis, en haut de `index.php`, écrivez en commentaire ce que fait le script, en une ou deux phrases.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Pour l'étape 3 : regardez la dernière ligne de votre tableau. Que vaut `$secondes`, et que vaut le test ? Relisez la partie "Tracer une boucle" de la [fiche de cours](../../cours/cours.md#tracer-une-boucle).

</details>

<details>
<summary>Indice 2</summary>

Pour l'étape 4 : une seule ligne du bloc modifie la variable testée. Relisez la partie "Finir une boucle" de la [fiche de cours](../../cours/cours.md#finir-une-boucle).

</details>
