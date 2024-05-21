<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "projet-japon";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Exécuter une requête SELECT
$sql = "SELECT * FROM manga";
$resultat = mysqli_query($connexion, $sql);
// Fermer la connexion
mysqli_close($connexion);


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/anime_manga.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500&family=Edu+NSW+ACT+Foundation:wght@700&family=Merriweather&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
    <title>Manga</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <img class="logo-1" src="icons/manga/icon-naruto.jpg" alt="logo-japon">
            <div class="liste">
                <a href="index.html">le japon</a>
                <a href="automobile.html">le monde automobile</a>
                <a href="anime-manga.php">anime-manga</a>
                <a href="voyage.html">voyage</a>
                <a href="formulaireDeContact.html">contact</a>
            </div>
        </nav>
    </header>
    <main>
        
        <div class="carrousel">
            <button class="precedent">❮</button>
            <div class="carrousel-interieur">
                <div class="carrousel-image">
                    <img src="images/manga/image-banniere-2.jpg" alt="">
                </div>
            </div>
            <button class="suivant">❯</button>
        </div>
        <div id="manga-section" class="manga-section">
            <div class="container">
                <h2>Mangas</h2>
                <div class="manga-container">
                    <?php
                       foreach ($resultat as $manga) {
                            echo '
                            <div class="manga">
                            <div class="manga-img">
                                <img src="'. $manga['url'] .'" alt="">
                            </div>
                            <div class="manga-description">
                                <h3>'. $manga['nom_du_manga'] .'</h3>
                            </div>
                        </div> 
                            ';
                       }
                    ?>
                </div>
        </div>
        <script src="js/anime_manga.js"></script>
    </main>
    <footer>
        <small>Copyright © 2024. Baton Dylan. Tous droits réservés.</small>
        <div class="lien-reseaux">
           <a href="mailto: dbaton@deastanceservices.fr">
           <img class="icon" src="icons/formulaire/icon-mail.jpg" alt="linkedin"></a>

           <a href="https://www.linkedin.com/in/dylan-baton-355381249/" target="_blank">
           <img class="icon" src="icons/formulaire/icon-linkedin-2.jpg" alt="linkedin"></a>

           <a href="https://www.lecoleatypique.fr/" target="_blank">
           <img class="icon icon-atypique" src="icons/formulaire/icon-atypique.jpg" alt=""></a> 
        </div>
    </footer>
</body>
</html>
