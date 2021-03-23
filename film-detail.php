<?php 
    include "connexion.php";

    $id_film = $_GET['id_film'];

    $sth = $dbh->prepare("SELECT `titre`, `realisateur`, `resume`, `description`, `image` FROM `film` WHERE `id_film` = :id_film;");
    $sth->bindParam(':id_film', $id_film, PDO::PARAM_INT);

    $sth->execute();

    $film = $sth->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$film['titre']?></title>
</head>
<body>
    <?php 
    include "en-tete.php";
    ?>

    <section>
        <div class="espacement">
            <h4></h4>
            <span></span>
            <p></p>
            <p></p>
            <img src="" alt="">
        </div>
    </section>

    <?php
    include "pied-page.php";
    ?>  
</body>
</html>