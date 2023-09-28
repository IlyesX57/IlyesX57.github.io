<?php
require_once('./exo2.html')
?>
<?php
// Récupérez les données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Exemple de vérification basique
if ($username === 'utilisateur1' && $password === 'motdepasse1') {
    // Les informations d'identification sont correctes
    // Vous pouvez maintenant afficher la page protégée avec les données de l'utilisateur
    $prenom = 'Prénom de l\'utilisateur';
    $nom = 'Nom de l\'utilisateur';

    echo "Bienvenue, $prenom $nom ($username)!";
    // Affichez ici le contenu de la page protégée.
} else {
    // Les informations d'identification sont incorrectes
    echo "Identifiants incorrects. Veuillez réessayer.";
}