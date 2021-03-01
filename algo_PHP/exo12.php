<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 12</h1>
    <strong><p>
        A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée
        (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $personnes = ["Mickael" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG"];
        $coucou = ["FRA" => "Salut", "ESP" => "Hola", "ENG" => "Hello"];

        ksort($personnes);

        /*foreach($personnes as $prenom => $langue){
            switch($langue){
                case "FRA": echo "Salut $prenom<br>"; break;
                case "ENG": echo "Hello $prenom<br>"; break;
                case "ESP": echo "Hola $prenom<br>"; break;
                default: echo "Langue non gérée pour $prenom <br>"
            }
        }*/

        foreach($personnes as $prenom => $langue){
            if(in_array($langue, array_keys($coucou))){
                $bonjour = $coucou[$langue];
                echo "$bonjour $prenom<br>";
            }else{
                echo "Langue non gérée pour $prenom <br>";
            }
        }


    ?>
</body>
</html>