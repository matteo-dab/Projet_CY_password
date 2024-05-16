<?php
// Démarrage de la session
session_start();

// Vérification si le nom est stocké en session
if (isset($_SESSION["nom"])) {
    // Récupération du nom depuis la session
    $nom = $_SESSION["nom"];

    // Création d'un tableau associatif contenant le nom
    $data = array('nom' => $nom);

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
