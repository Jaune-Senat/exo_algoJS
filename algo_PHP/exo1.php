<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <strong><p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p></strong>
    
   
    <h2>Résultat</h2>

    <?php

        $phrase = "Notre formation DL commence aujourd'hui";
        
        echo "La phrase ". $phrase. " contient ". strlen($phrase). " caractères.";

    ?>
</body>
</html>