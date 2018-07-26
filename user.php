<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET["nom"]) AND isset($_GET['prenom'])) {
        echo "Votre nom : " . $_GET['nom'] . " Votre prenom : " . $_GET['prenom'];
    }
    if (isset($_POST["nom"]) AND isset($_POST['prenom'])) {
        echo "Votre nom : " . $_POST['nom'] . " Votre prenom : " . $_POST['prenom'];
    }



   ?>
</body>
</html>