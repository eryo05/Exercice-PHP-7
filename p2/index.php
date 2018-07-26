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
        if (isset($_POST['nom']) AND isset($_POST['prenom'])) {
            echo $_POST['sexe'] . " " . $_POST['nom'] . " " . $_POST['prenom'];
            $fichier = $_POST['nom2'];
            echo "<br>" . $_POST['nom2'];
            $extension = pathinfo($fichier, PATHINFO_EXTENSION);
            if ($extension == 'pdf') {
                echo "<br> Fichier est un pdf";
            }
            else echo "<br> Fichier n'est pas un pdf";
        }
        else {
            echo '<form method="post" action="index.php">
            <label for="sexe">
            <select name="sexe">
            <option value="Madame">Madame</option>
            <option value="Monsieur">Monsieur</option>
            </select></label>
            <p>
            <label> Entrez Nom :
            <input type="text" name="nom"/>
            </p>
            </label>
            <p>
            <label> Entrez prenom :
            <input type="text" name="prenom"/>
            </label>
            <p>
            <input type="file" name="nom2" />
            </p>
            <input type="submit" value="Valider" />
            </form>';
        }
        ?>
</body>
</html>
