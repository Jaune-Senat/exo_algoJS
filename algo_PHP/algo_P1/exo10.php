<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 10</h1>
    <strong><p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
       $prix = 152;
       $paye = 200;
       $rendu = $paye - $prix;

       echo "Montant à payer : $prix <br>";
       echo "Montant versé: $paye <br>";
       echo "Rendu monnaie : $rendu <br>";
       echo "************************************<br><br>";
       $bDix = floor($rendu/10);
       $resUn = $rendu - (10*$bDix);
       $bCinq = floor($resUn/5);
       $resDeux = $resUn - (5*$bCinq);
       $pDeux = floor($resDeux/2);
       $resTrois = $resDeux -($pDeux*2);
       $pUn = floor($resTrois/1);

       //Il est clair qu'il n'est pas utile de diviser par un
       //Tout comme il est inutile de créer, dans le cas de cet exercice, une variable $pUn distincte de $resTrois
       // Il s'agit juste de détailler une façon de penser
        


       echo "Rendu de monnaie :<br>";
       echo "$bDix billets de 10€ - $bCinq billet de 5€ - $pDeux pièce de 2€ - $pUn pièce de 1€ ";
    ?>
</body>
</html>