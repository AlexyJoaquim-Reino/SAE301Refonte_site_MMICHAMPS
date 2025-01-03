<?php
 include '../database/data.php';
 rmProjet($_GET['id']);
 echo
 "<script>
  alert('Projet supprimé avec succès.');
  document.location.href = 'gestion_projet';
  </script>
  ";
?>