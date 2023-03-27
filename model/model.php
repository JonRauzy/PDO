<?php

// ATT : fetch(PDO::) renvois false si il est vide / alors qu'il renvoie null en mysqli

// on a plein de résultats alors on fait fetchall() et qui va dans un seul tableau associatif :
// function getAllCategories($db){
//     $statement = $db->query("SELECT * FROM category ORDER BY title ASC;");
//     return $statement->fetchAll(PDO::FETCH_ASSOC);
// }


function getAllPosts($db){
    $sql = "SELECT * FROM post ORDER BY id DESC;";
    try{
        $statement = $db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    return $statement->fetchAll(PDO::FETCH_ASSOC); 
}



// on a qu'un résultat alors on fait juste fetch() et qui va dans un seul tableau associatif :
function getOneCategory($db, $id){
           
}


function getUserByUserName($db) {
    $statement = $db->query("SELECT `id`, `username`, `userscreen` 
    FROM `user` 
    WHERE `username`='andrepalmisano';");
    return $statement->fetch(PDO::FETCH_ASSOC);
}


function insert($db){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sqlInsert = "INSERT INTO `post` (`title`, `content`, `user_id`) VALUES ('$title','$content',1)";
    $db->exec($sqlInsert);
                
}