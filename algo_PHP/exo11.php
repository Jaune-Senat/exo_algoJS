<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 11</h1>
    <strong><p>Initialiser un tableau de x marques de voitures. 
        Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu (une marque de voiture par ligne).
        Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.</p></strong>
    
    <h2>Résultat</h2>
    
    <?php

        $marque =["Peugeot", "Renault", "BMW", "Mercedes"];
        echo "Il y a " . count($marque) . " marques de voiture dans le tableau :";
    ?>
    <ul>
    <?php
        //for($i = 0; $i< count($marque); $i++){
        //    echo "<li> " . $marque[$i];
        //}

        foreach($marque as $marque){
            echo "<li> " . $marque;
        }
    ?>
    </ul>
</body>
</html>