<?php
require("connexion.php");

//récupérer toutes les articles de la base de données
function getArticles()
{
    $db = connectToDB();
    $query = "SELECT * FROM article ORDER BY id_article ASC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//prendre un article en particulier
function getArticleDetails($id)
{
    $db = connectToDB();
    $query = "SELECT * FROM article WHERE id_article=" . $id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

//prendre un utilisateur en particulier
function getUserDetails($id)
{
    $db = connectToDB();
    $query = "SELECT * FROM utilisateur WHERE id=" . $id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}


//récupérer toutes les projets de la base de données
function getProjets()
{
    $db = connectToDB();
    $query = "SELECT * FROM projet";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // permet de récupérer les résultats de la requête
    return $result;
}

//prendre un projet en particulier
function getProjetDetails($id)
{
    $db = connectToDB();
    $query = "SELECT * FROM projet WHERE id_projet=" . $id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

//récupérer toutes les matières de la base de données
function getMatieres()
{
    $db = connectToDB();
    $query = "SELECT * FROM matiere";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

//pour se connecter
function login($login, $password)
{
    $db = connectToDB();
    $hashpass = crypt($password, 'reinopassword');
    $query = "SELECT * FROM utilisateur WHERE login = :login";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $result = $stmt->execute();
    if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (hash_equals($hashpass, $result['mdp'])) {
            $_SESSION['name'] = $result['nom'];
            $_SESSION['photo_profil'] = $result['photo_profil'];
            $_SESSION['projets'] = $result['role_projets']; //1=peut voir les projets, 0=ne peut pas les voir
            $_SESSION['articles'] = $result['role_articles'];
            $_SESSION['admin'] = $result['role_admin'];
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

//ajouter un nouvel utilisateur
function addUser($name, $login, $mail, $pass, $bio, $photo_profil, $art = null, $proj = null, $admin = null)
{
    //raccourcir le chemin qui sera renvoyé
    $target_dir = str_replace("\src\database", "", dirname(__FILE__)) . '/assets/image/';
    $target_file = $target_dir . basename($photo_profil['name']);
    move_uploaded_file($photo_profil['tmp_name'], $target_file);
    $db = connectToDB();
    $hash = crypt($pass, 'reinopassword');
    $query = "INSERT INTO utilisateur (nom, login, mdp,mail, bio, photo_profil, role_articles, role_projets, role_admin) VALUES (:nom, :login, :mdp, :mail, :bio, :photo_profil, :role_articles, :role_projets, :role_admin)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom", $name, PDO::PARAM_STR);
    $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $stmt->bindValue(":mdp", $hash, PDO::PARAM_STR);
    $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
    $stmt->bindValue(":bio", $bio, PDO::PARAM_STR);
    $stmt->bindValue(":photo_profil", basename($photo_profil['name']), PDO::PARAM_STR);
    $stmt->bindValue(":role_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":role_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":role_admin", $admin, PDO::PARAM_INT);
    $stmt->execute();
}

//récupérer tous les utilisateurs
function getUsers()
{
    $db = connectToDB();
    $query = "SELECT * FROM utilisateur";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

//modifier un utilisateur
function editUser($id, $name, $bio, $photo_profil, $art = null, $proj = null, $admin = null)
{
    $target_dir = str_replace("\src\database", "", dirname(__FILE__)) . '/assets/image/';
    $target_file = $target_dir . basename($photo_profil['name']);
    move_uploaded_file($photo_profil['tmp_name'], $target_file);
    $db = connectToDB();
    $query = "UPDATE utilisateur SET nom=:nom, bio=:bio, photo_profil=:photo_profil, role_articles=:role_articles, role_projets=:role_projets, role_admin=:role_admin WHERE id=:id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom", $name, PDO::PARAM_STR);
    $stmt->bindValue(":bio", $bio, PDO::PARAM_STR);
    $stmt->bindValue(":photo_profil", basename($photo_profil['name']), PDO::PARAM_STR);
    $stmt->bindValue(":role_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":role_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":role_admin", $admin, PDO::PARAM_INT);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
}


//ajouter un article
function addArticle($nom, $synopsis, $contenu,  $miniature_article)
{
    $db = connectToDB();
    //raccourcir le chemin qui sera renvoyé
    $target_dir = str_replace("\src\database", "", dirname(__FILE__)) . '/assets/image/';
    $target_file = $target_dir . basename($miniature_article['name']);
    move_uploaded_file($miniature_article['tmp_name'], $target_file);
    $query = "INSERT INTO article (nom_article, contenu_article, date_article, synopsis, auteur, miniature_article) VALUES (:nom_article, :contenu_article, NOW(),:synopsis, :auteur, :miniature_article)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_article", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article", $contenu, PDO::PARAM_STR);
    $stmt->bindValue(":synopsis", $synopsis, PDO::PARAM_STR);
    $stmt->bindValue(":miniature_article", basename($miniature_article['name']), PDO::PARAM_STR);
    $stmt->bindValue(":auteur", $_SESSION['name'], PDO::PARAM_STR);
    $stmt->execute();
}

//ajouter un projet
function addProjet($nom_projet, $etudiants, $niveau, $lien, $img_projet, $iframe_projet, $description, $date_debut_projet, $date_fin_projet)
{
    $db = connectToDB();
    $target_dir = str_replace("\src\database", "", dirname(__FILE__)) . '/assets/image/';
    $target_file = $target_dir . basename($img_projet['name']);
    move_uploaded_file($img_projet['tmp_name'], $target_file);
    $query = "INSERT INTO projet (nom_projet, etudiants, niveau, lien, img_projet, iframe_projet, description, date_debut_projet, date_fin_projet) VALUES (:nom_projet, :etudiants, :niveau, :lien, :img_projet, :iframe_projet, :description, :date_debut_projet, :date_fin_projet)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
    $stmt->bindValue(":etudiants", $etudiants, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $niveau, PDO::PARAM_STR);
    $stmt->bindValue(":lien", $lien, PDO::PARAM_STR);
    $stmt->bindValue(":img_projet", $target_file, PDO::PARAM_STR);
    $stmt->bindValue(":iframe_projet", $iframe_projet, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->bindValue(":date_debut_projet", $date_debut_projet, PDO::PARAM_STR);
    $stmt->bindValue(":date_fin_projet", $date_fin_projet, PDO::PARAM_STR);

    $stmt->execute();
}

//modifier un article
function editArticle($id, $nom, $contenu, $synopsis)
{
    $db = connectToDB();
    $query = "UPDATE article SET nom_article=:nom_article, contenu_article=:contenu_article, synopsis=:synopsis WHERE id_article=:id_article";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_article", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article", $contenu, PDO::PARAM_STR);
    $stmt->bindValue(":synopsis", $synopsis, PDO::PARAM_STR);
    $stmt->bindValue(":id_article", $id, PDO::PARAM_INT);
    $stmt->execute();
}

//modifier un projet
function editProjet($id, $nom_projet, $etudiants, $date_debut_projet, $date_fin_projet, $niveau, $description, $iframe_projet, $lien)
{
    $db = connectToDB();
    $query = "UPDATE projet SET nom_projet=:nom_projet, etudiants =:etudiants, date_debut_projet=:date_debut_projet, date_fin_projet=:date_fin_projet, niveau=:niveau, description=:description,iframe_projet=:iframe_projet, lien=:lien WHERE id_projet=:id_projet";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);   /* bind value signifie lier le contenu de nom_projet dans le paramètre nom */
    $stmt->bindValue(":etudiants", $etudiants, PDO::PARAM_STR);
    $stmt->bindValue(":date_debut_projet", $date_debut_projet, PDO::PARAM_STR);
    $stmt->bindValue(":date_fin_projet", $date_fin_projet, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $niveau, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->bindValue(":iframe_projet", $iframe_projet, PDO::PARAM_STR);
    $stmt->bindValue(":id_projet", $id, PDO::PARAM_INT);
    $stmt->bindValue(":lien", $lien, PDO::PARAM_STR);
    $stmt->execute();
}

//supprimer un article
function rmArticle($id)
{
    $db = connectToDB();
    $query = "DELETE FROM article WHERE id_article = :id_article";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":id_article", $id, PDO::PARAM_INT);
    $stmt->execute();
}

//supprimer un projet
function rmProjet($id)
{
    $db = connectToDB();
    $query = "DELETE FROM projet WHERE id_projet = :id_projet";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":id_projet", $id, PDO::PARAM_INT);
    $stmt->execute();
}
