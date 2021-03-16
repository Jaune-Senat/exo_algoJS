<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 10</title>
</head>
<body>
    <h1>Exercice 10</h1>
    <p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : 
    <br>champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
    <br>« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    <br>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

    <?php

        $champs = array("Nom", "Prénom", "Email", "Ville");
        $sexes = array("Masculin", "Féminin");
        $choix = array("Developpeur Logiciel", "Designer Web", "Intégrateur", "Chef de Projet");

        function Situation($champs, $sexes, $choix){
            $result = "<form><br>";
            foreach($champs as $champ){
                $result .= "<label>". $champ ."</label><br><input type='texte' name='$champ'><br>";
            }
            foreach($sexes as $sex){
                $result .= "<input type='checkbox' id='choice1' name='choice1'><label for='choice1'>". $sex ."</label><br>";
            }
            $result .= "<label> Vous êtes:</label><br><select id='job' name='job'>";
            foreach($choix as $choice){
                $result .= "<option value =$choice>" .$choice . "</option><br>";
            }
            $result .= "<br></form><br><input type='submit'>";
            return $result;
        }

        echo Situation($champs, $sexes, $choix);
       
    ?>
</body>
</html>