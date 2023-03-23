<?php


function getAllCategories($db){
    $statement = $db->query("SELECT * FROM category ORDER BY title ASC;");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function getOneCategory($db, $id){
    $statement = $db->query("SELECT * FROM category WHERE id=$id");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function getAllPosts($db){
    $statement = $db->query("SELECT * FROM post ORDER BY id DESC;");
    return $statement->fetchAll(PDO::FETCH_ASSOC); 
}

function getUserByUserName($db){
    $statement = $db->query("SELECT `id`, `username`, `userscreen` 
    FROM `user` 
    WHERE `username`='andrepalmisano';");
    // return $statement->;
}