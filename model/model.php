<?php

echo "oui";

function recup($db){
    $query = $db->query("SELECT * FROM post ORDER BY id DESC;");
    return $result = $query->fetchAll(PDO::FETCH_ASSOC); 
}