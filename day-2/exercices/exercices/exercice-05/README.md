---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-06
---

# Exercice 05 - Rendre la monnaie

## Objectif

Vous vous entraînez à enchaîner des calculs où chaque résultat sert au suivant.

## Point de départ

Créez un fichier `index.php` vierge dans ce dossier.

## Consigne

Un distributeur rend la monnaie avec des billets de 20, 10 et 5 euros, et des pièces de 1 euro. Il rend toujours le moins de billets et de pièces possible.

1. Le script affiche combien de billets et de pièces de chaque valeur rendre, pour la somme rangée dans une variable.

## Résultat attendu

Pour une somme de 87 euros, le terminal peut afficher :

```
Billets de 20 : 4
Billets de 10 : 0
Billets de 5 : 1
Pièces de 1 : 2
```

Testez votre script avec ces sommes :

| Somme | Billets de 20 | Billets de 10 | Billets de 5 | Pièces de 1 |
| ----- | ------------- | ------------- | ------------ | ----------- |
| `87`  | `4`           | `0`           | `1`          | `2`         |
| `38`  | `1`           | `1`           | `1`          | `3`         |
| `40`  | `2`           | `0`           | `0`          | `0`         |
| `3`   | `0`           | `0`           | `0`          | `3`         |

## Coup de pouce

<details>
<summary>Indice</summary>

On commence par les billets de 20. Ce qui reste à rendre ensuite sert pour les billets de 10, et ainsi de suite.

</details>
