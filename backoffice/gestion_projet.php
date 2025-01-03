<?php include '../database/data.php'; 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des projets</title>
    <?php include('head.php'); ?>

</head>

<body>

    <?php

    if ($_SESSION['projets'] == 1) {
        echo '
<form action="register_projet" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
<h1 class="mt-5 mb-2">Ajouter un projet</h1>

<label class="form-label" for="nom_projet">Nom du projet*</label>
<input class="form-control" required type="text" name="nom_projet" id="nom_projet">

<label class="form-label" for="description">Description*</label>
<input class="form-control" required type="text" name="description" id="description">

<label class="form-label" for="date_debut_projet">Date de début</label>
<input class="form-control" required type="date" name="date_debut_projet" id="date_debut_projet">

<label class="form-label" for="date_fin_projet">Date de fin</label>
<input class="form-control" required type="date" name="date_fin_projet" id="date_fin_projet">

<label class="form-label" for="niveau">Niveau</label>
<input class="form-control" required type="text" name="niveau" id="niveau">

<label class="form-label" for="etudiants">Étudiant(s)*</label>
<input class="form-control" required type="text" name="etudiants" id="etudiants">

<label class="form-label" for="img_projet">Image*</label>
<input class="form-control" type="file" accept ="image/*" name="img_projet" id="img_projet" required>   

<label class="form-label" for="iframe_projet">Lien de la vidéo</label>
<input class="form-control" type="text" name="iframe_projet" id="iframe_projet" placeholder="https://www.example.com" required pattern="https?://.+">

<label class="form-label" for="lien">Lien</label>
<input class="form-control" type="link" name="lien" id="lien" placeholder="https://www.example.com" required pattern="https?://.+">

<input class="btn btn-primary my-4" type="submit" value="Enregistrer">
</div>
</form>';
    }

    echo '<div class="w-75 m-auto"><h2 class="mt-5 mb-2 text-center">Liste des projets</h2>';
    
        if ($_SESSION['articles'] == 1) {
            echo '<table class="table table-bordered table-striped px-5 ">';
            foreach (getProjets() as $projet) {
                echo "
        <tr>
            <th>{$projet['nom_projet']}</th><th>{$projet['description']}</th><th><a href='page_modifier_projet?id={$projet['id_projet']}'>Modifier</a></th><th><a href='supprimer_projet?id={$projet['id_projet']}'>Supprimer</a></th> 
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