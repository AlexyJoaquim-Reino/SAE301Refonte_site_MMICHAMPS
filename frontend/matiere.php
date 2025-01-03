<?php
include('../database/data.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matières | MMI-Champs</title>
    <style>
        .card {
            cursor: pointer;
            width: 250px;
            height: 254px;
            background: rgb(255, 255, 255);
            border-radius: 5px;
            border: 1px solid rgba(0, 0, 255, .2);
            transition: all .2s;
            box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
        }

        .card:hover {
            box-shadow: -12px 12px 2px -1px rgba(0, 0, 255, .2);
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?>
    <main class="mb-5 container h-100">
        <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Matières</li>
            </ol>
        </nav>


        <br>
        <div data-aos="fade-right" data-aos-offset="500" class="container w-75 ">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $result = getMatieres();
                foreach ($result as $matiere) { ?>
                    <div class="col"> <!-- mettre echo ? !-->
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $matiere['nom_matiere']; ?></h3>
                                <hr>
                                <p class="card-text"><?php echo $matiere['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>

            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>