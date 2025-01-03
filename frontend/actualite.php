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
            object-fit: contain;
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container mb-5 mt-2">
        <main class='d-flex flex-column justify-content-center'>
            <nav aria-label="breadcrumb" class="mt-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualités</li>
                </ol>
            </nav>
            <div class="row row-cols-3 row-cols-md-3">
                <?php
                $result = getArticles();
                foreach ($result as $actu) {  // $actu = une table de la base de donnée
                ?>
                    <div data-aos="fade-right" data-aos-offset="300" class="container mb-5">
                        <div class="card h-100" style="width: 18rem;">
                            <img class="card-img-top sameImage" <?php echo "src='assets/image/" . $actu['miniature_article'] . " '" ?> alt="Actualité">
                            <div class="card-body">
                                <h1 class="card-title"> <a class="other_link" href=<?php echo 'details?id='.$actu['id_article']?> > <?php echo $actu['nom_article']; ?></a></h1>
                                <p class="card-text"><?php echo $actu['synopsis']; ?></p>
                                <footer class="blockquote-footer"><cite title="Source Title"><?php echo $actu['auteur']; ?></cite></footer>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
    </div>
    </div>
</body>

<?php include 'footer.php'; ?>

</html>