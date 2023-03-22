<?php

require 'config.php';

try{
    $connect = new PDO("mysql:host=$HOST;port=$PORT;dbname=$DBNAME;charset=$CHARSET;","$USER","$PWD");
}catch(PDOException $e){
    die($e->getMessage());
}

var_dump($connect);
