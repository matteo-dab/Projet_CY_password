function getNom() {
    fetch('nom.php')
    .then(response => response.json()) // Convertir la réponse en JSON
    .then(Data => {
        
        if (Data.nom) {
            // Affichage du message de bienvenue dans la balise <div> avec la classe "Bienvenu"
            document.querySelector('.Bienvenu').innerHTML = "Bienvenu " + Data.nom;
        }
       
        
    })
    .catch(error => console.error('Erreur lors de la récupération du nom :', error));
}

window.onload = function() {
    getNom();
};
