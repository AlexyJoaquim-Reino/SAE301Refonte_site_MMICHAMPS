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
$article = getArticleDetails($_GET['id']);
?>
<body>
<form action="modifier_actualite" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h1 class="mt-5 mb-2">Modifier un article</h1>
   
    <label class="form-label" for="titre">Titre*</label>
    <input class="form-control" required type="text" name="titre" id="titre" value="<?php echo(($article['nom_article'])); ?>">
    
    <label class="form-label" for="titre">Synopsis*</label>
    <input class="form-control" required type="text" name="synopsis" id="titre" value="<?php echo(($article['synopsis'])); ?>">

    <label class="form-label" for="contenu">Contenu*</label>
    <textarea required name="contenu" id="contenu" cols="30" rows="10"><?php echo(($article['contenu_article'])); ?></textarea>
    
    <input type="number" name="id" value=<?php echo($_GET['id'])?> style="display: none;">
    <input class="btn btn-primary my-4" type="submit" value="Modifier">
</div>
</form>
</body>

</html>