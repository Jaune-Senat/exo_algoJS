<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <strong><p>Ecrire un algorithme qui renvoie la table de multiplication de 8.</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $table = 8;
        echo "Table de $table : <br>";
 
        for($i = 1; $i<11;$i++){
             echo "$i &times $table = " . ($table*$i) . " <br>";
        }

        echo "<br><br>Table de $table : deuxième algorithme <br>";

        $j = 1;
        while($j<11){
            echo "$j &times $table = " . ($table*$j) . " <br>";
            $j++;
        }
    ?>
</body>
</html>