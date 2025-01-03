<?php
 include '../database/data.php';
 rmArticle($_GET['id']);
 echo
 "<script>
  alert('Article supprimé avec succès.');
  document.location.href = 'gestion_actualite';
  </script>
  ";
 ?>
