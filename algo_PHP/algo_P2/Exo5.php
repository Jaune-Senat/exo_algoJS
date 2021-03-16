<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>

    <?php

    $nomsInput = array("Nom", "Prénom", "Ville");

    function afficherInput($nomsInput){
        $result = "<form>";
        foreach($nomsInput as $nomInput){
            $result .= "<label>$nomInput</label><br><input type='text'><br>";
        }
        $result .= "</form>";
        return $result;
    }
    echo"<form>". afficherInput($nomsInput). "</form>";
       
    ?>
</body>
</html>