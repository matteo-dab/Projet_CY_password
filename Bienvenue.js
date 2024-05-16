// Définition de la fonction getNom
function getNom() {
    // Effectuer une requête fetch vers le fichier nom.php
    fetch('nom.php')
    // Traiter la réponse en tant que JSON
    .then(response => response.json())
    // Traiter les données JSON
    .then(Data => {
        // Vérifier si le champ nom est présent dans les données
        if (Data.nom) {
            // Affichage du message de bienvenue dans la balise <div> avec la classe "Bienvenu"
            document.querySelector('.Bienvenu').innerHTML = "Bienvenu " + Data.nom;
        }
    })
    // Gérer les erreurs de la requête
    .catch(error => console.error('Erreur lors de la récupération du nom :', error));
}

// Exécuter la fonction getNom lorsque la fenêtre est entièrement chargée
window.onload = function() {
    getNom();
};

