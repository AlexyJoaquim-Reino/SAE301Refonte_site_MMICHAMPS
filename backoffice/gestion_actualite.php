<?php include '../database/data.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des actualités</title>
    <?php include('head.php'); ?>

</head>

<body>

    <?php
    if ($_SESSION['articles'] == 1) {
        echo '
<form action="register_actualite" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
<h1 class="mt-5 mb-2">Ajouter un article</h1>

<label class="form-label" for="titre">Titre*</label>
<input class="form-control" required type="text" name="titre" id="titre">

<label class="form-label" for="synopsis">Synopsis*</label>
<input class="form-control" required type="text" name="synopsis" id="synopsis">

<label class="form-label" for="image">Image</label>
<input class="form-control" type="file" accept ="image/*" name="image" id="image" required>

<label class="form-label" for="contenu">Contenu*</label>
<textarea required name="contenu" id="contenu" cols="30" rows="10"></textarea>

<input class="btn btn-primary my-4" type="submit" value="Enregistrer">
</div>
</form>';
    }

    echo '<div class="w-75 m-auto"><h2 class="mt-5 mb-2 text-center">Liste des articles</h2>';
    
        if ($_SESSION['articles'] == 1) {   
            /* Il faudra me réexpliquer le code qui permet de savoir si on voit un élément (quand c'est = à 1) ou si on ne peut pas le voir (quand c'est = à 0) */
            echo '<table class="table table-bordered table-striped px-5 ">';
            foreach (getArticles() as $article) {
                echo "
        <tr>
            <th>{$article['nom_article']}</th><th>{$article['contenu_article']}</th><th><a href='page_modifier_actualite?id={$article['id_article']}'>Modifier</a></th><th><a href='supprimer_actualite?id={$article['id_article']}'>Supprimer</a></th> 
        </tr>";
            }
            echo '</table></div>';
                    /* La balise th permet de bien séparer chaque catégorie que l'on souhaite intégrer */

        } else {
            echo '<p class="text-center">Vous ne pouvez pas modifier ou supprimer cette catégorie. Pour cela adressez-vous à l\'administrateur pour qu\'il vous donne accès.</p>';
        }
   

    ?>
</body>

</html>