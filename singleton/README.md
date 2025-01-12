# Singleton Pattern

Le pattern Singleton garantit qu'une classe n'a qu'une seule instance et fournit un point d'accès global à cette instance.

## Implémentation en PHP

La classe `Singleton` dans ce dossier empêche la création de nouvelles instances en rendant le constructeur privé et en fournissant une méthode statique `getInstance()` pour récupérer l'unique instance.

## Test

Le fichier `test.php` contient des tests pour vérifier que la classe `Singleton` renvoie toujours la même instance à chaque appel de `getInstance()`.
