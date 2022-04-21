<?php 
    // Fonction qui permet d'ajouter un article
    function addArticle($bdd, $nom, $prix){
        try{
            $req = $bdd->prepare('INSERT INTO article(nom_article, prix_article)
            VALUES(:nom_article, :prix_article);');
            $req->execute(array(
                'nom_article' => $nom,
                'prix_article' => $prix
            ));
        }
        catch(Exception $e){
            die('Erreur '.$e->getMessage());
        }
    }
?>

