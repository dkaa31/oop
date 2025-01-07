<?php

require_once "animal.php";
require_once "ape.php";
require_once "frog.php";

// si animal
$sheep = new Animal("shaun");

echo "Name: " . $sheep->namanya() . "<br>";
echo "Legs: " . $sheep->kakinya() . "<br>";
echo "Cold Blooded: " . $sheep->darahnya() . "<br>" . "<br>";

// si kodok
$kodok = new Frog("buduk");

echo "Name: " . $kodok->namanya() . "<br>";
echo "Legs: " . $kodok->kakinya() . "<br>";
echo "Cold Blooded: " . $kodok->darahnya() . "<br>";
echo "Jump: ";
$kodok->lompat();

echo "<br>" . "<br>";

// si ape ape
$sungokong = new Ape("kera sakti");

echo "Name: " . $sungokong->namanya() . "<br>";
echo "Legs: " . $sungokong->kakinya() . "<br>";
echo "Cold Blooded: " . $sungokong->darahnya() . "<br>";
echo "Yell: ";
$sungokong->teriak();

?>