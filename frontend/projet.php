<?php
include('../database/data.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets | MMI-Champs</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <main class="mb-5 container h-100">
        <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projets</li>
            </ol>
        </nav>


        <br>
        <div data-aos="fade-right" data-aos-offset="300" class="container mb-4">
            <h1 class="mb-3 display-6">Projets étudiants :</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                <?php
                $result = getProjets();
                for ($i = 0; $i < count($result); $i++) {
                    $row = $result[$i];
                    echo "
          <div class='col'>
              <div class='card h-100'>
                  <img src='assets/image/" . $row['img_projet'] . "' class='card-img-top' alt='Image du projet'>
                  <div class='card-body'>
                      <h2 class='card-title'>" . $row['nom_projet'] . "</h2>
                      <span class='card-title'> Début: " . $row['date_debut_projet'] . "</span> <br>
                      <span class='card-title'> Fin: " . $row['date_fin_projet'] . "</span>
                      <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
                      <a class='btn btn-secondary me-md-2' href='" . $row['iframe_projet'] . "' target='_blank'>Vidéo</a>
                      <a class='btn btn-primary me-md-2' href='" . $row['lien'] . "' target='_blank'>Aperçu</a>
                      </div>
                  </div>
              </div>
          </div>";
                }
                ?>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>