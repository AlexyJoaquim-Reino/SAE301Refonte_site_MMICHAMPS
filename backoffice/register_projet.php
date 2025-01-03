<?php
include '../database/data.php';


addProjet(
  $_POST['nom_projet'],
  $_POST['etudiants'],
  $_POST['niveau'],
  $_POST['lien'],
  $_FILES['img_projet'],
  $_POST['iframe_projet'],
  $_POST['description'],
  $_POST['date_debut_projet'],
  $_POST['date_fin_projet']
);

echo
"<script>
  alert('Projet ajouté avec succès.');
  document.location.href = 'gestion_projet';   
  </script>
  ";
?>

<!-- document.location.href = là ou l'utilisateur arrive après que le message s'affiche !-->
<!-- Problème d'url ! Comment peut-n mettre l'url d'une page sans href ?! C'est les redirections via le fichier htaccess -->