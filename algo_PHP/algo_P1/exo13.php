<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 13</h1>
    <strong><p>
        Calculer la moyenne générale d'une élève dont les notes sont renseignées dans un tableau (sans coef).
        Elle devra être affichée avec deux décimales. </p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $notes = [10, 12 ,8 ,19 ,3 ,16 ,11 ,13 ,9];
        $moyenne = array_sum($notes)/count($notes);

        echo "Les notes obtenues par l'élève sont : ";
        foreach($notes as $note){
            echo $note . " ";
        }

        echo "<br> La moyenne de l'élève est de " . round($moyenne,2);
    

    ?>
</body>
</html>