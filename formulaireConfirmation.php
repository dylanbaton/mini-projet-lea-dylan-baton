<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "projet-japon";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
echo "Connexion réussie à la base de données.";
}

if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
        
        // print_r($_POST);
        // $_POST est t-il vide ?
        if(empty($_POST)){
            echo 'le formulaire n\'a pas été soumis correctement';
            exit();
        } else {
            echo 'Le formulaire a bien etait pris en compte';
            $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
            $prenom = mysqli_real_escape_string($connexion, $_POST['prenom']);
            $commentaires = mysqli_real_escape_string($connexion, $_POST['commentaires']);
            
            $sql= "INSERT INTO visiteurs( nom, prenom, commentaires) VALUES ('$nom','$prenom','$commentaires')";
            mysqli_query($connexion, $sql);
           
        }
     
}

header("Location: index.html");

?>