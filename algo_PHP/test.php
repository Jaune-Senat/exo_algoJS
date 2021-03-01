<?php

require "Animal.php";

//instanciation de deux objets de la classe Animal
$chien = new Animal ("Chien", "Golden", 4, "2019-06-11");
$chat = new Animal ("Chat", "Siamois", 4, "2018-09-11");

echo $chien->getNomAnimal();