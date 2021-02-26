<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <strong><p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge.</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
    
    $age = 10;

    if(5 < $age && $age < 8 ){
        echo "L'enfant qui a $age appartient à la catégorie 'Poussin'";
    }elseif(7 < $age && $age < 10 ){
        echo "L'enfant qui a $age appartient à la catégorie 'Pupille'";
    }elseif(9 < $age && $age < 12 ){
        echo "L'enfant qui a $age appartient à la catégorie 'Minime'";
    }elseif(11 < $age ){
        echo "L'enfant qui a $age appartient à la catégorie 'Cadet'";
    }else{
        echo "Votre enfant est trop jeune pour être inscrit";
    }
    
    ?>
</body>
</html>