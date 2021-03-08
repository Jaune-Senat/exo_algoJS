<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Banque</title>
</head>
<body>

<h1>titre </h1>
<?php    

require "Account.php";
require "Customer.php";


$Mickael = new Customer("Murmann", "Mickael", "1985-01-17", "Strasbourg");
$Virgile = new Customer("Pehenji", "Virgile", "1984-01-16", "Gibraltar");

$account1 = new Account("Compte courant", 350, "euros", $Mickael);
$account2 = new Account("Livret A", 1337, "euros", $Mickael);
$account3 = new Account("Compte courant", 40, "euros", $Virgile);
$account4 = new Account("Livret A", 200, "euros", $Virgile);

echo $Mickael;

echo $Virgile;

echo $account1;
echo $account3;
$account1->transfer($account3, 40);

echo $account1;
echo $account3;


?>
</body>
</html>