<?php
include "Good.php";
include "Quantgoods.php";
include "Digitalgoods.php";
include "Weightgoods.php";

$goodItem = new Quantgoods('Computer Game', 'Штучный', 50, 100, 70, 20);
echo $goodItem->render();

$goodDigit = new Digitalgoods('Movie', 'Digital', 80, 100, 30, 50);
echo $goodDigit->render();

$weightGood = new Weightgoods('Кукуруза', 'Весовой', 1000, 10, 3, 500);
echo $weightGood -> render();