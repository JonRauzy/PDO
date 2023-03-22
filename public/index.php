<?php


// dépendance :
require_once '../config.php';
require_once '../model/model.php';


// connexion :
try{
    $connect = new PDO(DB_TYPE.":host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=".DB_CHARSET.";",DB_USER,DB_PWD);
}catch(PDOException $e){
    die($e->getMessage());
}


// deconnexion :
$connect = null;

