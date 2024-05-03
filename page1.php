<?php

// Tableau associatif contenant les informations de connexion pour 10 utilisateurs
$users = array(
    array("email" => "user1@example.com", "password" => "password1"),
    array("email" => "user2@example.com", "password" => "password2"),
    // Ajoutez d'autres utilisateurs ici
);

// Vérifie si les données POST existent
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Vérifie si l'utilisateur existe dans le tableau $users
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            // Utilisateur trouvé, affiche un message de bienvenue
            echo "Bienvenue, $email !";
            // Arrête le script après avoir trouvé l'utilisateur
            exit;
        }
    }
    
    // Si l'utilisateur n'est pas trouvé, redirige vers la page de connexion
    header("Location: index.php");
    exit;
} else {
    // Si les données POST ne sont pas fournies, redirige vers la page de connexion
    header("Location: index.php");
    exit;
}
?>
