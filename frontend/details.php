<?php include '../database/data.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités | MMI-Champs</title>
    <style>
        .sameImage {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container mb-5 mt-2">
        <?php
        $result = getArticleDetails($_GET['id']);
        // $actu = une table de la base de donnée
        ?>
        <main class='d-flex flex-column justify-content-center'>
            <nav aria-label="breadcrumb" class="mt-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Accueil</a></li>
                    <li class="breadcrumb-item">Actualités</li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $result['nom_article']; ?></li>
                </ol>
            </nav>
            <p>

                <img class="card-img-top sameImage" <?php echo "src='assets/image/" . $result['miniature_article'] . " '" ?> alt="Détails actualité">
            <h1><?php echo $result['nom_article']; ?></h1>

            <p><?php echo $result['synopsis']; ?></p>
            <p><?php echo $result['contenu_article']; ?></p>
            <footer class="blockquote-footer"><cite title="Source Title"><?php echo $result['auteur'] . ' - '.$result['date_article']; ?></cite></footer>
            </p>
    </div>
    </div>
</body>

<?php include 'footer.php'; ?>

</html>