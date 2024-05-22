<?php
// Démarrage de la session
session_start();

// Vérification si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    // Stockage des données dans des variables de session 
    $_SESSION["nom"] = $nom;
    $_SESSION["email"] = $email;

    // Redirection vers la page index.html
    header("Location: index.html");
    exit();
}
?>
