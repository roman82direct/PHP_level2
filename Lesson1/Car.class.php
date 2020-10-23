<?php
include "Outer.php";

class Car{
    protected $title;
    protected $price;

    //1) Конструкторы это методы, которые не должны содержать оператора return
    //2) Конструктор называется __construct
    //3) Конструктор вызывается автоматически при создании объекта класса

    function __construct($title,$price){
        $this->title = $title;
        $this->price = $price;
//        $this->drive();
    }

//    function setter($title,$price){
//        $this->title = $title;
//        $this->price = $price;
//    }

    function test(){
        echo "Тестовый метод";
    }


    function drive(){
//        $obj = new Outer;
//        $obj->test();
        echo $this->title." стоит ".$this->price."<br>";
    }
}
//
//$car1 = new Car("Audi",1000);
////$car1->setter("Audi",1000);
////$car1->title = "Audi";
////$car1->price = 1000;
////$car1->drive();
//
//$car2 = new Car("BMW",2000);
//$car3 = new Car("VW",3000);
//
//$cars = [$car1,$car2,$car3];
//
//$s = 0;
//foreach ($cars as $car){
//    $s += $car->price;
//    $car->drive();
//}
//echo "Общая стоимость авто составляет $s";
//
////$car2->setter("BMW",2000);
////$car2->title = "BMW";
////$car2->price = 2000;
////$car2->drive();