<?php
include "Factory.php";

$count = rand(5,20);
$factory = new Factory();

$carNames = ["Audi","Skoda","VW"];

$cars =  [];
$sum = 0;
for($i=0;$i<$count;$i++){
    $cars[] = $factory->createCar($carNames[rand(0,count($carNames)-1)]);
    echo $cars[$i]->getTitle()." стоит ".$cars[$i]->getPrice()."<br>";
    $sum += $cars[$i]->getPrice();
}
echo "Общая стоимость всех авто составляет $sum";