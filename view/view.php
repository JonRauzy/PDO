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

            <?php if(!empty($allPosts) && !empty($allCategories) && !empty($oneCategory)):?>
                <p>salut</p>
            <?php else: ?>
                <p>aurevoir</p>
            <?php endif; ?>


        <!-- var dump frere : -->
        <?php var_dump($oneCategory); ?>
        <hr>
        <?php var_dump($allCategories); ?>
        <hr>
        <?php var_dump($allPosts); ?>
        <hr>
        <?php var_dump($oneUserByName); ?>
    </body>
</html>


