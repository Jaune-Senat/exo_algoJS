<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 9</title>
</head>
<body>
    <h1>Exercice 9</h1>
    <p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre.</p>

    <?php

        $elements = array("Choix 1", "Choix 2", "Choix 3");

        function afficherRadio($elements){
            $result = "<form><br>";
            foreach($elements as $element){
                $result .= "<input type='radio' id='choice1' name='choice1'><label for='choice1'>". $element ."</label><br>";
            }
            $result .= "<br></form><br><input type='submit'>";
            return $result;
        }

        echo afficherRadio($elements);
       
    ?>
</body>
</html>