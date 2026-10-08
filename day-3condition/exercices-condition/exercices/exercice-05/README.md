---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 05 - Année bissextile

## Objectif

Vous vous entraînez à traduire une règle en conditions, sans modèle de départ.

## Point de départ

Créez un fichier `index.php` vierge dans ce dossier.

## Consigne

Une année est bissextile si elle est divisible par 4. Sauf si elle est divisible par 100 : elle ne l'est pas. Sauf si elle est aussi divisible par 400 : elle l'est quand même.

1. Le script indique si l'année rangée dans une variable est bissextile ou non.

## Résultat attendu

Le terminal peut afficher :

```
2024 est bissextile
```

Testez votre script avec ces années :

| Année  | Bissextile ? |
| ------ | ------------ |
| `2024` | oui          |
| `2023` | non          |
| `1900` | non          |
| `2000` | oui          |

## Coup de pouce

<details>
<summary>Indice</summary>

Un nombre est divisible par 4 quand le reste de sa division par 4 vaut 0.

</details>
