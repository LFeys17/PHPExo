---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 06 - Pierre, feuille, ciseaux

## Objectif

Vous vous entraînez à organiser de nombreux cas dans un programme lisible.

## Point de départ

Créez un fichier `index.php` vierge dans ce dossier.

## Consigne

Deux joueurs choisissent chacun "pierre", "feuille" ou "ciseaux". La pierre bat les ciseaux, les ciseaux battent la feuille, la feuille bat la pierre.

1. Le script affiche le résultat de la partie, à partir des deux choix rangés dans des variables.
2. Un choix qui n'existe pas affiche "Choix invalide".

## Résultat attendu

Le terminal peut afficher :

```
Joueur 1 gagne
```

Testez votre script avec ces choix :

| Joueur 1  | Joueur 2  | Résultat       |
| --------- | --------- | -------------- |
| `pierre`  | `ciseaux` | joueur 1 gagne |
| `pierre`  | `feuille` | joueur 2 gagne |
| `feuille` | `feuille` | égalité        |
| `ciseaux` | `feuille` | joueur 1 gagne |
| `lézard`  | `pierre`  | choix invalide |
