<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <strong><p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA(exprimé en décimal)</p></strong>
    
    <h2>Résultat</h2>
    
    <?php
        $prixU = 9.99;
        echo "Prix unitaire de l'article : $prixU € <br>";
        $amount = 5;
        echo "Quantité : $amount <br>";
        $tva = 0.2;
        echo "Taux de TVA : $tva <br>";
        $totalHt = $prixU*$amount;
        $totalTva = $totalHt*$tva;
        $totalTtc = $totalHt + $totalTva;
        echo "Le montant de la facture à régler est de : " . round($totalTtc, 2) . "€"

        //Même si le résultat aurait de toute manière affiché uniquement 2 décimales après la virgule dans cet exercice, j'ai jugé utile de prendre l'habitude d'arrondire à deux décimales
    ?>
</body>
</html>