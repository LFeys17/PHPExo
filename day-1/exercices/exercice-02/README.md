---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-05
---

# Exercice 02 - Script cassé

## Objectif

Vous vous entraînez à lire un message d'erreur et à réparer un script.

## Point de départ

Le fichier `index.php` contient un script qui affiche une carte postale. Mais il est cassé : il ne fonctionne pas.

## Consigne

1. Lancez le script. Lisez le message d'erreur : notez le type d'erreur et le numéro de ligne.
2. Corrigez l'erreur, enregistrez, puis relancez.
3. Recommencez jusqu'à ce que le script s'exécute sans erreur.
4. Le script s'exécute, mais un affichage est encore faux. Corrigez-le pour obtenir le résultat attendu.

## Résultat attendu

Le terminal affiche :

```
=== Carte postale ===
Bonjour de Lille !
Nous avons visité le beffroi.
Le soir, nous goûtons des gaufres.
À bientôt,
Ada
```

## Avant de modifier

En haut de `index.php`, écrivez en commentaire ce que le script doit afficher, en une ou deux phrases.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Relisez la partie "Pièges fréquents" de la [fiche de cours](../../cours/cours.md#pièges-fréquents).

</details>

<details>
<summary>Indice 2</summary>

Un mot est signalé alors qu'il semble bien écrit ? Regardez ce qui le précède : une chaîne de caractères s'arrête au guillemet suivant, où qu'il soit.

</details>

<details>
<summary>Indice 3</summary>

Une erreur peut en cacher une autre : PHP s'arrête à la première qu'il trouve.

</details>
