<?php
// Vérification si les données de formulaire sont envoyées
if(isset($_GET['nom']) && isset($_GET['email'])) {
    $nom = $_GET['nom']; 
    $email = $_GET['email']; 

    // Redirection vers un autre site avec un message de bienvenue incluant le nom
    header("Location: https://projet-cy-password-4xkxyv28b-matteo-dabs-projects.vercel.app/?nom=$nom");
    exit(); 
} else {
    // Redirection vers la page précédente si les données de formulaire ne sont pas envoyées
    header("Location: login.html");
    exit(); 
}
?>
