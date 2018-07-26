<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="get" action="user.php">

    <p> GET <br>
    <label> Entrez Nom :
    <input type="text" name="nom"/>
    </p>
    </label>
    <p>
    <label> Entrez prenom :
    <input type="text" name="prenom"/>
    <input type="submit" value="Valider" />
    </label>
</form>

<form method="post" action="user.php">

<p> post <br>
<label> Entrez Nom :
<input type="text" name="nom"/>
</p>
</label>
<p>
<label> Entrez prenom :
<input type="text" name="prenom"/>
<input type="submit" value="Valider" />
</label>
</form>


</body>
</html>
