<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 9</h1>
    <strong><p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
    Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20ans, alors celle-ci est imposable (sinon la personne est non imposable).</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $age = 32;
        $sexe = "F";
        echo "Age : $age <br>";
        echo "Sexe : $sexe <br>";

        if( 18 < $age && $age < 35 && $sexe == "F" || $sexe == "M" && $age > 20){
            echo "La personne est imposable";
        } else {
            echo "La personne n'est pas imposable";
        }
    ?>
</body>
</html>