<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <strong><p>Ecrire un algorithme permettant de savoir si la phrase "Engage le jeu que je le gagne" est un palindrome.</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        
        $phrase = strtolower("Engage le jeu que je le gagne");
        $phrase = str_replace(" ", "", $phrase);

        $phrase_bis = strrev($phrase);


        if($phrase == $phrase_bis){
            echo "La phrase 'Engage le jeu que je le gagne' est un palindrome.";
        } else{
            echo "La phrase 'Engage le jeu que je le gagne' n'est pas un palindrome";
        }
        
    ?>
</body>
</html>