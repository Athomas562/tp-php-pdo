<?php
/*
  TP 5 – AJOUTER, MODIFIER, SUPPRIMER AVEC exec()

  1. Ajouter le jeu Pac-Man (genre Action, année 1980, note 16)
     puis afficher : Pac-Man ajouté avec l'id ...
  2. Passer la note de Fortnite à 15
     puis afficher le nombre de jeux modifiés.
  3. Supprimer Pac-Man
     puis afficher le nombre de jeux supprimés.

  Vérifier le résultat avec la page du TP 3.

  Question : que se passerait-il avec DELETE FROM jeu sans WHERE ?
  Réponse :
*/

require("connexion.php");

$sql = "INSERT INTO Jeu (Titre, Annee ,Note) VALUES ('Pac-man', '1990', '16')";
$base->exec($sql);
$sql = "UPDATE Jeu SET Note = '15' WHERE Titre = 'Fortnite'";
$base->exec($sql);
$sql = "DELETE FROM Jeu WHERE Titre = 'Pac-man'";
$base->exec($sql);
?>
