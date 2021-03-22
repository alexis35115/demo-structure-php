<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Exemple</title>
</head>
<body>
    <?php 
    include "en-tete.php";

    include "connexion.php";

    $sth = $dbh->prepare("SELECT `id_film`, `titre`, `realisateur`, `resume` FROM `film`;");
    $sth->execute();
    $films = $sth->fetchAll();

    foreach ($films as $film) {
        print_r($film);
    }

    include "pied-page.php";
    ?>
</body>
</html>