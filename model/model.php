<?php

echo "oui";

function recup($connect){
    $query = $connect->query("SELECT * FROM post ORDER BY id DESC;");
    return $result = $query->fetchAll(PDO::FETCH_ASSOC); 
}