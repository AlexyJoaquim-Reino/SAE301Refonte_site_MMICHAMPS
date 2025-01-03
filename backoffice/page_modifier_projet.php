<?php
include '../database/data.php';  ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>
</head>
<?php
$projet = getProjetDetails($_GET['id']);
?>

<body>
    <form action="modifier_projet" method="post" enctype="multipart/form-data">
        <div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
            <h1 class="mt-5 mb-2">Modifier un projet</h1>

            <label class="form-label" for="nom_projet">Nom du projet*</label>
            <input class="form-control" required type="text" name="nom_projet" id="nom_projet" value="<?php echo (($projet['nom_projet'])); ?>">

            <label class="form-label" for="etudiants">Étudiant(s)*</label>
            <input class="form-control" required type="text" name="etudiants" id="etudiants" value="<?php echo (($projet['etudiants'])); ?>">

            <label class="form-label" for="date_debut_projet">Date de début</label>
            <input class="form-control" required type="date" name="date_debut_projet" id="date_debut_projet" value="<?php echo (($projet['date_debut_projet'])); ?>">

            <label class="form-label" for="date_fin_projet">Date de fin</label>
            <input class="form-control" required type="date" name="date_fin_projet" id="date_fin_projet" value="<?php echo (($projet['date_fin_projet'])); ?>">

            <label class="form-label" for="niveau">Niveau</label>
            <input class="form-control" required type="text" name="niveau" id="niveau" value="<?php echo (($projet['niveau'])); ?>">

            <label class="form-label" for="description">Description*</label>
            <input class="form-control" required type="text" name="description" id="description" value="<?php echo (($projet['description'])); ?>">

            <label class="form-label" for="iframe_projet">Lien de la vidéo</label>
            <input class="form-control" type="text" name="iframe_projet" id="iframe_projet" value="<?php echo (($projet['iframe_projet'])); ?>">

            <label class="form-label" for="lien">Lien</label>
            <input class="form-control" type="text" name="lien" id="lien" value="<?php echo (($projet['lien'])); ?>">

            <input type="number" name="id" value=<?php echo ($_GET['id']) ?> style="display: none;">
            <input class="btn btn-primary my-4" type="submit" value="Modifier">
        </div>
    </form>
</body>

</html>