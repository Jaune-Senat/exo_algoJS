<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non</p>

    <?php

    $elements = array("Choix 1", "Choix 2", "Choix 3");

    function genererCheckbox($elements){
        $result = "<form><br>";
        foreach($elements as $element){
            $result .= "<input type='checkbox' id='choice1' name='choice1'><label for='choice1'>". $element ."</label><br>";
        }
        $result .= "<br></form><br><input type='submit'>";
        return $result;
    }

    echo genererCheckbox($elements);
       
    ?>
</body>
</html>