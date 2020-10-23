<?php
include "Car.class.php";

class RaceCar extends Car{
    private $speed;

    function __construct($title, $price,$speed)
    {
        parent::__construct($title, $price);
        $this->speed = $speed;
    }

    function drive()
    {
        $this->test();
        parent::drive();
        echo $this->title." разгоняетя до скорости ".$this->speed;
    }

}

class Demo extends RaceCar{
    function __construct($title, $price, $speed)
    {

//        $this->drive();
        parent::__construct($title, $price, $speed);
    }
}
$o = new Demo("ВАЗ",500,100);
$o->test();
//
//$car = new RaceCar("Ferrari",5000,560);
//$car->drive();