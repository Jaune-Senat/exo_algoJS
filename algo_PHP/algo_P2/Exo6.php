<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

    <?php

    $elements = array("Un Homme", "Une Femme", "Aucun des deux");

    function alimenterListeDeroulante($elements){
        $result = "<form><br><label> Vous êtes:</label><br><select id='genre' name='genre'>";
        foreach($elements as $element){
            $result .= "<option value =$element>" .$element . "</option>";
        }
        $result .= "</select><br></form><br><input type='submit'>";
        return $result;
    }

    echo alimenterListeDeroulante($elements);
       
    ?>
</body>
</html>