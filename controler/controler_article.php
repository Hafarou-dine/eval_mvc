<?php
    /* ------------------------------ Imports ------------------------------ */ 
    // import du fichier de connexion à la BDD
    include "../utils/connectBDD.php";
    // import du model 
    include "../model/model_article.php";
    // import de la vue
    include "../vue/vue_article.php";

    /* ------------------------------ Logique ------------------------------ */
    // On verifie si les champs sont remplis  
    if(isset($_POST['nom_article']) && ($_POST['nom_article'] != "") &&
    isset($_POST['prix_article']) && ($_POST['prix_article'] != "")){
        $nom  = $_POST['nom_article'];
        // On arrondi la valeur du prix  à deux chiffre à pres la virgule
        $prix  = round($_POST['prix_article'], 2);
        // On ajoute l'article
        addArticle($bdd, $nom, $prix);
        // On affiche un message de confirmation 
        echo "<p>L'article $nom a été ajouté en BDD</p>";
    }
    else{
        // sinon on affiche un message 
        echo "<p>Veuillez remplir les champs du formulaire</p>";
    }
?>

