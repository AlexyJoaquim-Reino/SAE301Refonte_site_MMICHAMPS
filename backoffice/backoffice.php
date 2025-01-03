<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php');
    include '../database/data.php';

    if (!isset($_SESSION["name"])) {
        Header("Location: login");
    }

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | BackOffice</title>
    <style>
        .potoprofil {
            border-radius: 50%;
        }

        .card {
            width: 190px;
            height: 254px;
            background: rgb(255, 255, 255);
            border-radius: 0.4em;
            box-shadow: 0.3em 0.3em 0.7em #00000015;
            transition: border 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: grey 0.2em solid;
        }

        .card:hover {
            border: #006fff 0.2em solid;
        }

        #imageArroundie {
            border-radius: 100px;
        }

        #linktohome {
            color: white;
        }
    </style>
</head>

<body>
    <br>
    <center>
        <img src="assets/logo/logo-but-mmi-champs-black.png" height="100px" width="180px" alt="Logo MMI noir">
        <br> <br> <img src="<?php echo  'assets/image/' . $_SESSION['photo_profil']  ?>" class="potoprofil" height="80px" width="80px" alt="Photo de profil">
        <span><?php echo  $_SESSION['name']  ?></span>


        <br> <br>
        <h1>Bienvenue dans votre tableau de bord, <?php echo $_SESSION['name']  ?> </h1>
        <div class="btn btn-primary my-4"> <a id="linktohome" href="logout">Retour à l'accueil</a> </div>

        <main class='d-flex flex-column justify-content-center'>
            <div class="row row-cols-4 row-cols-md-4">
                <div class="container mb-5">
                    <div class="card">
                        <div class="card-body">
                            <center><img id='imageArroundie' src="assets/image/projet_desc.webp" height="90px" width="90px" alt="Paramètre"></center>
                            <h5 class="card-title"><a href="gestion_actualite">Gérer les actualités</a></h5>
                            <p class="card-text">Ajoutez, modifiez et supprimez des actualités.</p>
                        </div>
                    </div>
                </div>

                <div class="container mb-5">
                    <div class="card">
                        <center><img id='imageArroundie' src="assets/image/projet_desc.webp" height="90px" width="90px" alt="Paramètre"></center>
                        <h5 class="card-title"> <a href="gestion_projet">Gérer les projets</a> </h5>
                        <p class="card-text">Ajoutez, modifiez et supprimez des projets.</p>
                    </div>
                </div>


                <div class="container mb-5">
                    <div class="card">
                        <center><img id='imageArroundie' src="assets/image/projet_desc.webp" height="90px" width="90px" alt="Paramètre"></center>
                        <h5 class="card-title"><a href="gestion_utilisateur">Gérer les utilisateurs</a></h5>
                        <p class="card-text">Ajoutez, modifiez et supprimez des utilisateurs.</p>
                    </div>
                </div>

        </main>
    </center>
</body>


</html>