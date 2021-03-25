<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Page de confirmation de la création d'un film</title>
</head>
<body>
    <?php 
    include "en-tete.php";
    ?>

    <?php 

    print_r($_POST);

    //INSERT INTO `film`(`titre`, `resume`, `description`, `realisateur`, `image`) VALUES ([value-2],[value-3],[value-4],[value-5],[value-6])

    ?>


    <?php 
    include "pied-page.php";
    ?>
</body>
</html>