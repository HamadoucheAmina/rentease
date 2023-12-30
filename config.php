<?php
$host = "localhost"; // Nom d'hôte de la base de données 
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$database = "rentease"; // Nom de la base de données

// Établir la connexion à la base de données
$bdd = mysqli_connect($host, $username, $password, $database);

// Vérifier si la connexion a réussi
if (!$bdd) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}


// Fermer la connexion
mysqli_close($bdd);
?>
