<?php include('src/database/data.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<meta name="description" content="Projet de refonte du site MMI par Reino">

<head>
  <?php include 'src/frontend/head.php'; ?>
  <title>Accueil - MMI Champs</title>
</head>

<body>
  <?php include 'src/frontend/menu.php'; ?>
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>BUT MMI CHAMPS</h1>
          <h2> Vous êtes à la recherche d'une formation ? Vous êtes un autre étudiant MMI d'un autre IUT ?
            Un ancien élève ? Un parent ? Un enseignant ?
            Peu importe ! Venez découvrir le BUT MMI à l'IUT de Champs-sur-Marne !</h2>
          <div><a href="matieres" class="btn-get-started scrollto">Voir le programme</a></div>
        </div>

        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img pl-50" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/logo/logo-but-mmi-champs-white - Copie copie.png" class="img-fluid animated" alt="Logo MMI">
        </div>
      </div>
    </div>

  </section>

  <section id="counts" class="counts1">
    <div class="container">
      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="3" class="purecounter"></span>
          <p> Ans d'existence </p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1600" data-purecounter-duration="3" class="purecounter"></span>
          <p>Diplômés</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="3" class="purecounter"></span>
          <p>Candidats chaque année </p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="56" data-purecounter-duration="3" class="purecounter"></span>
          <p>Places</p>
        </div>

      </div>

    </div>
  </section>
  <section id="hero">
    <main class="mb-5 container h-100">
      <br>
      <div data-aos="fade-right" data-aos-offset="300" class="container mb-4">
        <h3 class="mb-3 display-6" style="color:white;">Projets étudiants :</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
          <?php
          $result = getProjets();

          for ($i = 0; $i < 3; $i++) {
            $row = $result[$i];
            echo "
          <div class='col'>
              <div class='card h-100'>
                  <img src='assets/image/" . $row['img_projet'] . "' class='card-img-top' alt='Image du projet'> 
                  <div class='card-body'>
                      <h4 class='card-title'>" . $row['nom_projet'] . "</h4>
                      <span class='card-title'> Début: " . $row['date_debut_projet'] . "</span> <br>
                      <span class='card-title'> Fin: " . $row['date_fin_projet'] . "</span>

                  </div>
              </div>
          </div>";
          }


          ?>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-primary me-md-2" href="projets">Voir les projets</a>

        </div>
      </div>

    </main>

  </section>

  <script>
    // Stockez l'ID de l'intervalle dans une variable
    var intervalID = setInterval(function() {
      // Code de rafraîchissement automatique ici
    }, 5000); // Exemple : rafraîchissement toutes les 5 secondes (5000 millisecondes)

    // Pour arrêter le rafraîchissement automatique, utilisez clearInterval()
    clearInterval(intervalID);
  </script>
  
  <?php include 'src/frontend/footer.php'; ?>
</body>