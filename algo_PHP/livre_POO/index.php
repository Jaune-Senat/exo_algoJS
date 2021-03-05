<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo POO Livre</title>
</head>
<body>
<h1> un titre</h1>
<?php

require "Book.php";
require "Autor.php";


$steph = new Autor("Stephen", "King");
$b1 = new Book("ça",1138, 1986, 20, $steph);
$b2 = new Book("Simetierre",374, 1983, 15, $steph);
$b3 = new Book("Le Fléau",823, 1978, 14, $steph);
$b4 = new Book("Shining",447, 1977, 16, $steph);

echo $steph;

?>
    
</body>
</html>
