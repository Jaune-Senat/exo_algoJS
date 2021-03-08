<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 14</h1>
    <strong><p>
        Calculer l'âge exact d'une personne à partir de sa date de naissance (année, mois, jour)</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $dateActuelle = new DateTime();
        $dateNaissance = new DateTime("1985-01-17");

        $dateActuelle->setTimezone(new DateTimeZone(('Europe/Paris')));
        echo $dateActuelle->format("d-m-Y H:i");

        $interval = $dateNaissance->diff($dateActuelle);

        //var_dump($interval);

        echo "La personne née le " . $dateNaissance->format("d/m/Y") . " à " . $interval->format("%y ans %m mois %d jours");

    ?>
</body>
</html>