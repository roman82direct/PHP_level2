<?php
include_once "Car.php";
class Factory{
    function createCar($marka){
        $car = new Car($marka,rand(1000,5000));
        return $car;
    }
}