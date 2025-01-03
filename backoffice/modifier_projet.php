<?php
 include '../database/data.php';
 editProjet($_POST['id'], $_POST['nom_projet'],$_POST['etudiants'],$_POST['date_debut_projet'], $_POST['date_fin_projet'], 
 $_POST['niveau'],
 $_POST['description'], $_POST['iframe_projet'], $_POST['lien']);
 echo
  "<script>
  alert('Projet modifié avec succès.');
  document.location.href = 'gestion_projet';
  </script>
  ";
