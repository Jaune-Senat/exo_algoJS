<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <strong><p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $francs = 100;
        $convert = 6.55957;
        $euros = $francs/$convert;

        echo $francs . "F  = " . round($euros, 2) . "€";
    ?>
</body>
</html>