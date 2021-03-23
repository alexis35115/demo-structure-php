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
    <div class="espacement">
        <a href="supprimer-film-traitement.php">Supprimer ce film</a>
    </div>
    <section>
        <div class="espacement">
            <h4><?=$film['titre']?></h4>
            <span><?=$film['realisateur']?></span>
            <p><?=$film['resume']?></p>
            <p><?=$film['description']?></p>
            <img src="images/<?=$film['image']?>" alt="image du film" class="centrer">
        </div>
    </section>

    <?php
    include "pied-page.php";
    ?>  
</body>
</html>