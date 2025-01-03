<?php
 include '../database/data.php';
 editArticle($_POST['id'], $_POST['titre'],$_POST['contenu'],$_POST['synopsis']);
 echo
  "<script>
  alert('Article modifié avec succès.');
  document.location.href = 'gestion_actualite';
  </script>
  ";
  ?>