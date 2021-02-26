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
    Ecrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain". Afficher l'ancienne et la nouvelle phrase.</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        
        $phrase = "Notre formation DL commence aujourd'hui";
        
        echo $phrase. "<br>";

        $phrase_bis = str_replace("aujourd'hui", "demain", $phrase);

        echo "<br>". $phrase_bis;


    ?>
</body>
</html>