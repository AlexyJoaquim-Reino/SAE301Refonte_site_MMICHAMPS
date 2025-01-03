<?php
include '../database/data.php';

addUser(
    $_POST['nom'],
    $_POST['login'],
    $_POST['mail'],
    $_POST['mdp'],
    $_POST['bio'],
    $_FILES['photo_profil'],
    $_POST['role_articles'] ?? 0,
    $_POST['role_projets'] ?? 0,
    $_POST['role_admin'] ?? 0,
);

echo
"<script>
  alert('Utilisateur ajouté avec succès.');
  document.location.href = 'gestion_utilisateur';   
  </script>
  ";
?>