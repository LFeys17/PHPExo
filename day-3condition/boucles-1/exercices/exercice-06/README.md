---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-07
---

# Exercice 06 - Le nénuphar

## Objectif

Vous vous entraînez à écrire une boucle dont on ne connaît pas le nombre d'itérations à l'avance.

## Point de départ

Créez un fichier `index.php` vierge dans ce dossier.

## Consigne

Un nénuphar pousse sur un étang. Le jour 1, il couvre 1 m². Chaque jour, sa surface double. La surface de l'étang est rangée dans une variable.

1. Le script affiche le jour où le nénuphar couvre tout l'étang.
2. Le script affiche aussi la surface du nénuphar, jour après jour.

## Résultat attendu

Pour un étang de 10 m², le terminal peut afficher :

```
Jour 1 : 1 m²
Jour 2 : 2 m²
Jour 3 : 4 m²
Jour 4 : 8 m²
Jour 5 : 16 m²
L'étang est couvert le jour 5
```

Testez votre script avec ces surfaces d'étang :

| Surface de l'étang (m²) | Jour où l'étang est couvert |
| ----------------------- | --------------------------- |
| `10`                    | `5`                         |
| `1000`                  | `11`                        |
| `1024`                  | `11`                        |
| `1025`                  | `12`                        |
| `2`                     | `2`                         |
| `1`                     | `1`                         |

## Coup de pouce

<details>
<summary>Indice</summary>

Cette fois, le test ne porte pas sur le numéro du jour. Qu'est-ce qui doit arrêter la boucle ? Relisez la partie "Finir une boucle" de la [fiche de cours](../../cours/cours.md#finir-une-boucle).

</details>
