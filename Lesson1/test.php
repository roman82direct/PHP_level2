<?php
//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//$a1 = new A();
//$a2 = new A();
//$a1->foo();// т. к. форма инкремента префиксная,то при вызове функции получаем ++0 = 1
//$a2->foo();// т. к. используем static, то х относится к классу (а не к объекту) и после первого вызова значение x = 1. Результатом этого вызова будет ++1 = 2
//$a1->foo();// аналогично х = 2 Результат вызова ++2 = 3
//$a2->foo();

//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A();
//$b1 = new B();
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();
//echo '<br>';
//
//echo 'hi';

//$hello = "Hello!";
//for ($i=0; $i<=strlen($hello); $i++){
//    echo substr($hello, $i, 1);
//}
//$hello = ["H","e","l","l","o"];
//foreach ($hello as $key => $val)
//{
//    echo $val;
//}

$shop = [
    "Audi" => [
        "price" => [1000,1500],
        "color" => "Белый",
        "year" => 2020
    ],
    "BMW" => [
        "price" => 1200,
        "color" => "Черный",
        "year" => 2020
    ]
];
//print_r($shop);
////echo $shop['Audi']['price'][1];
//
//var_dump($shop);
//var_dump((int) '012345');
//echo " // Функция int возвращает целое число из строки 012345. <hr>";
//
//var_dump ((float)123.0 === (int)123.0);
//echo " // (float)123.0 возвращает дробное число 123.0, а (int)123.0 возвращает целое число 123. При сравнении без приведения типов результатом будет false, а при сравнении с приведением типов будет true. <hr>";
//
var_dump((int)0);
var_dump((int)'Hello, World!');
var_dump ((int)1 === (int)'Hello, World!');