<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #red{
        color : red;
    }
    </style>
    <title>Exo 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <strong>Créer une fonction personnalisée <em>convertirMajRouge()</em> permettant de transformer une chaine de caractère passée en argument en majuscule et en rouge.
    <br> Vous devrez appeler la fonction comme suite : <em>convertirMajRouge($texte);</em></strong>

<?php

$texte = "Mon texte en paramètre";

function convertirMajRouge($var){
    $convert = "<p id='red'>". mb_strtoupper($var). "</p>";
    return $convert;
}

echo convertirMajRouge($texte);

?>
    
</body>
</html>