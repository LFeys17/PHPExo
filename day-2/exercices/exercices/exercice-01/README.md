---
tags:
  - epitech
  - webacademie
  - wac-08-lil
  - sas-posture-pro
  - exercise
date: 2026-10-06
---

# Exercice 01 - Fiche de présentation

## Objectif

Vous vous entraînez à lire, modifier et afficher des variables.

## Point de départ

Le fichier `index.php` contient un script qui affiche le prénom et l'âge d'une personne.

## Consigne

1. Lancez le script. Il affiche le prénom et l'âge de Lina.
2. Remplacez Lina par votre prénom, et son âge par le vôtre.
3. Le script affiche une troisième ligne avec une ville, rangée dans une variable.
4. Le script affiche une dernière ligne avec l'âge dans 10 ans. Si l'âge change, cette ligne change aussi.

## Résultat attendu

Avec `$prenom = "Lina"`, `$age = 19` et `$ville = "Lille"`, le terminal affiche :

```
Prénom : Lina
Âge : 19 ans
Ville : Lille
Dans 10 ans : 29 ans
```

Testez aussi ces valeurs de `$age` :

| `$age` | Dernière ligne affichée |
| ------ | ----------------------- |
| `19`   | `Dans 10 ans : 29 ans`  |
| `45`   | `Dans 10 ans : 55 ans`  |
| `0`    | `Dans 10 ans : 10 ans`  |

## Avant de modifier

En haut de `index.php`, écrivez en commentaire ce que fait le script actuel, en une ou deux phrases.

## Coup de pouce

<details>
<summary>Indice 1</summary>

Relisez la partie "Assembler du texte et des variables" de la [fiche de cours](../../cours/cours.md#assembler-du-texte-et-des-variables).

</details>

<details>
<summary>Indice 2</summary>

Pour l'étape 4 : relisez la partie "Calculer avec des variables" de la [fiche de cours](../../cours/cours.md#calculer-avec-des-variables).

</details>
