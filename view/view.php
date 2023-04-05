<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO</title>
    </head>
    <body>
        <h1>PDO</h1>
            <?php 

            $debut="2023-02-12";
            $fin="2023-03-27 14:30";
            $sqleu = "SELECT * FROM `post` WHERE `datecreate` > ? AND `datecreate` < ?;"; 
            // "?" est un marqueur
            
            $prepare = $db->prepare($sqleu);
            
            $prepare->bindParam(1,$debut,PDO::PARAM_STR);  
            $prepare->bindParam(2,$fin,PDO::PARAM_STR);   

            $prepare->execute();    
            
            $prepare->setFetchMode(PDO::FETCH_ASSOC);
                
            $getPostByDate = $prepare->fetchAll();

            var_dump($getPostByDate);

            ?>
        
        <h2>pour insérer</h2>
        <form action="" method="POST">
            <input type="text" placeholder="title" name="title"><br>
            <input type="text" name="content" placeholder="content">
            <input type="submit">
        </form>

            <h2>affichage méthode while() et toutes les categories (degolasse) :</h2>
                <?php 
                $allCategories = $db->query("SELECT * FROM category ORDER BY title ASC;");
                while($item = $allCategories->fetch(PDO::FETCH_ASSOC)){
                    echo "<p>ID: ". $item['id'] . "</p>";
                }
                ?>
                

            <h2>affichage avec findall() et tout les posts : </h2>
                <?php 
                if(!empty($allPosts)){
                    foreach($allPosts as $item){
                        echo "<p>TITLE : " . $item['title'] . "</p><br>";
                        echo "<p>Contenu : </p><br><p>" . $item['content'] . "</p><br>";
                    }
                }
                ?>

            <h2>execution</h2>
            <p>oui</p>



            <h2>transactions</h2>
            <?php

            $db -> beginTransaction();
            $sql1 = "INSERT INTO post (title, content, user_id) VALUES (?,?,?)";
            $title = "patate";
            $content = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis harum earum eveniet obcaecati tempore provident mollitia nemo porro molestiae facere voluptatem voluptatibus molestias iste commodi id voluptates, vero reiciendis vitae.";
            $userID = 3;

            $prepare1 = $db -> prepare($sql1);
            $prepare1->bindParam(1,$title, PDO::PARAM_STR);
            $prepare1->bindParam(2,$content, PDO::PARAM_STR);
            $prepare1->bindParam(3,$userID, PDO::PARAM_INT);

            $prepare1 -> execute();
            
            try{
                $db->commit(); 
                // validatiàon de la transaction
            }catch(Exception $e){
                //bonne pratique mais pas obligatoire pour mysql mariadb
                $db ->rollBack();
                die($e -> getMessage());
            }
            
            ?>



        
        <!-- var dump frere : -->
        <!-- <?php var_dump($oneCategory); ?>
        <hr>
        <?php var_dump($allCategories); ?>
        <hr>
        <?php var_dump($allPosts); ?>
        <hr>
        <?php var_dump($oneUserByName); ?> -->
    </body>
</html>


