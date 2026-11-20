<!--
  TP 2 – COMPTER LES JEUX

  Afficher : Il y a 10 jeux dans la ludothèque.
  (le nombre doit venir de la base, pas être écrit à la main)

  Expérience : ajouter un jeu dans phpMyAdmin puis recharger la page.
-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TP 2 - Compter les jeux</title>
</head>
<body>
<?php
require("connexion.php");
$requete = $base->query('SELECT COUNT(*) FROM `jeu`');
$nbr = $requete->fetchColumn();
echo "Il y a " . $nbr . " jeux dans la ludothèque.";
?>
</body> 
</html>


