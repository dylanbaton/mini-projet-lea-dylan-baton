<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-formulaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500&family=Edu+NSW+ACT+Foundation:wght@700&family=Merriweather&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
<header>
        <nav class="navbar">
        <img class="logo-1" src="icons/icon-sushi.jpg" alt="logo-sushi">
            <div class="liste">
                <a href="index.html">le japon</a>
                <a href="automobile.html">le monde automobile</a>
                <a href="formulaireDeContact.php">Formulaire</a>
            </div>
        </nav>
    </header>
    <main>   
        <form class="formulaire" action="formulaireConfirmation.php" method="post">
        
            <label for="nom">Nom*</label>
            <input type="text" id="nom" name="nom">

            <label for="prenom">prenom*</label>
            <input type="text" id="prenom" name="prenom">

            <label for="commentaires">commentaires*</label>
            <textarea type="text" id="commentaires" name="commentaires"></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </main>    
</body>
</html>