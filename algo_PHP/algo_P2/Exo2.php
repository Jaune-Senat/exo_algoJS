<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <strong>Soit un tableau contenant les 4 pays suivants et leur capitale : France, Allemagne, USA, Italie.
    <br> Réaliser un algorithme permettant d'afficher le tableau en HTML avec le nom du pays en majuscule, le tout trié par ordre alphabétique grace à une fonction personnalisée.
    <br> Vous devrez appeler la fonction comme suit: </strong> <em>afficherTableHTML($capitales);</em>

<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");
asort($capitales);

function afficherTableHTML($capitales){
    echo "<table border=1> 
    <thead><tr><th>Pays</th><th>Capitale</th></tr></thead><tbody>";
    foreach($capitales as $pays=>$capitale){
        echo "<tr><td>$pays</td><td>$capitale</td></tr>";
    }
    echo "</tbody></table>";
}

afficherTableHTML($capitales);

?>
    
</body>
</html>