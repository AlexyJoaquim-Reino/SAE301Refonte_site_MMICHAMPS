<?php
include '../database/data.php';  ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>
</head>

<?php
$user = getUserDetails($_GET['id']);
?>

<body>
    <form action="modifier_utilisateur" method="post" enctype="multipart/form-data">
        <center>
            <h1 class="mt-5 mb-2">Modifier un utilisateur</h1>
        </center>

        <div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">

            <label class="form-label" for="name">Nom et prénoms*</label>
            <input class="form-control" required type="text" name="name" id="name" value="<?php echo (($user['nom'])); ?>">

            <label class="form-label" for="bio">Bio*</label>
            <input class="form-control" required type="text" name="bio" id="bio" value="<?php echo (($user['bio'])); ?>">

            <label class="form-label" for="photo_profil">Photo de profil*</label>
            <input class="form-control" required type="file" name="photo_profil" id="photo_profil" required>

            <fieldset>
                <legend>Permissions</legend>
                <label class="form-check-label" for="role_projets">Projets</label>
                <input class="form-check-input" type="checkbox" name="role_projets" id="" value="1" <?php echo $user['role_projets'] == 1 ? 'checked' : ''; ?>><br>
                <label class="form-check-label" for="role_articles">Articles</label>
                <input class="form-check-input" type="checkbox" name="role_articles" id="" value="1" <?php echo $user['role_articles'] == 1 ? 'checked' : ''; ?>><br>
                <label class="form-check-label" for="role_admin">Administration</label>
                <input class="form-check-input" type="checkbox" name="role_admin" id="" value="1" <?php echo $user['role_admin'] == 1 ? 'checked' : ''; ?>><br>
            </fieldset>

            <input type="number" name="id" id="" value=<?php echo ($_GET['id']) ?> style="display: none;">
            <input class="btn btn-primary my-4" type="submit" value="Modifier">
        </div>
    </form>
</body>

</html>