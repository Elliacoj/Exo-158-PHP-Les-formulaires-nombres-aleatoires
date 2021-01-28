<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <?php
        if(isset($_POST['error']) && $_POST['error'] === "1") {
            echo "Alors, on essai de faire de la merde!!!";
        }
        elseif(isset($_POST['error']) && $_POST['error'] === "2") {
            echo "L'un des 2 champs n'est pas un chiffre/nombre";
        }
    ?>
    <div id="container">
        <form method="post" action="resultat.php">
            <div>
                <label for="numberOne">Rentrez un nombre</label>
                <input type="text" name="numberOne" id="numberOne" required pattern="[0-9]{0,}">
            </div>

            <div>
                <label for="numberTwo">Rentrez un autre nombre</label>
                <input type="text" name="numberTwo" id="numberTwo" required pattern="[0-9]{0,}">
            </div>

            <div>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
