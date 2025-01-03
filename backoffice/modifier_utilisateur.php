<?php
include '../database/data.php';
editUser(
    $_POST['id'],
    $_POST['name'],
    $_POST['bio'],
    $_FILES['photo_profil'],
    $_POST['role_articles'] ?? 0,
    $_POST['role_projets'] ?? 0,
    $_POST['role_admin'] ?? 0
);

echo
"<script>
  alert('Utilisateur modifié avec succès.');
  document.location.href = 'gestion_utilisateur';
  </script>
  ";
