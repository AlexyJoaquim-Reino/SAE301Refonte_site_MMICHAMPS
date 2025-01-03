<?php
 include '../database/data.php';
 if(login($_POST['username'], $_POST['mdp'])){
    header('Location: backoffice');
} else {
    header('Location: login.php?err=login');
};
