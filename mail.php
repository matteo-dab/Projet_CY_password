<?php
// Démarrage de la session
session_start();

// Vérification si le mail est stocké dans la session
if (isset($_SESSION["email"])) {
    // Récupération du mail depuis la session
    $email = $_SESSION["email"];

    // Création d'un tableau associatif contenant le mail
    $data = array('email' => $email);

    // Conversion du tableau en format JSON
    $json = json_encode($data);

    // Envoi du contenu JSON avec l'en-tête approprié
    header('Content-Type: application/json');
    echo $json;
} else {
    // Si le nom n'est pas trouvé en session, renvoyer une réponse vide
    echo "{}";
}
?>
