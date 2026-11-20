<?php
/*
  TP 1 – SE CONNECTER À LA BASE DE DONNÉES

  1. Se connecter à la base ludotheque avec PDO
     (serveur : localhost, utilisateur : root, mot de passe : root avec MAMP, vide avec WAMP/XAMPP).
  2. Activer l'affichage des erreurs SQL.
  3. Afficher « Connexion réussie ! » si tout va bien.
  4. En cas d'erreur, afficher le message d'erreur et arrêter le script.

  Expérience : remplacer "ludotheque" par "ludotek". Quel message obtenez-vous ?
*/

// Pour l'experience ca me donne cette erreur "Fatal error: Uncaught PDOException: SQLSTATE[HY000] [1049] Base 'ludotek' inconnue in C:\wamp64\www\tp-php-pdo\tp1_connexion.php on line 16"

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=ludotheque",
        "root"
    );
    echo "Connexion réussie !";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

