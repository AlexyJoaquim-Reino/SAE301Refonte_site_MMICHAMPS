<?php
session_start();

function connectToDB(){
  //local
  $db = new PDO('mysql:host=localhost;dbname=mmi-champs;charset=UTF8;port=3306', 'root', '');

  //server o2switch
  //$db = new PDO('mysql:host=localhost;dbname=jlnm7038_mmi-champs;charset=UTF8;port=3306', 'jlnm7038', 'YXFF-FbQf-Qrd/');

  return $db;
}
