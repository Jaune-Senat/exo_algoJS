<?php

require "Animal.php";
require "Marque.php";
require "Ordinateur.php";

//instanciation de deux objets de la classe Animal
$chien = new Animal ("Chien", "Golden", 4, "2019-06-11");
$chat = new Animal ("Chat", "Siamois", 4, "2018-09-11");

echo $chien->getNomAnimal(). " ".$chien->getRace();

var_dump($chien);
var_dump($chat);

echo($chien);
echo($chat);

$chien->manger("Croquettes");
$chien->manger("Viande");
$chat->manger("Poisson");

$chien->attaquer($chat);

var_dump($chien);
var_dump($chat);

$asus = new Marque("Asus", "Corée");
$ordinateur1 = new Ordinateur($asus, "85465", 16, "Intel i7");
$ordinateur2 = new Ordinateur($asus, "5445", 8, "Intel i9");

echo $asus;
echo $ordinateur1;
echo $ordinateur2;

var_dump($ordinateur1);
var_dump($ordinateur2);