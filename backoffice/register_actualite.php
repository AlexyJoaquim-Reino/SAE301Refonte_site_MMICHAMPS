<?php
include '../database/data.php';
addArticle($_POST['titre'], $_POST['synopsis'], $_POST['contenu'], $_FILES['image']);
echo
"<script>
  alert('Article ajouté avec succès.');
  document.location.href = 'gestion_actualite';
  </script>
  ";
