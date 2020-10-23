<?php
//echo "Hello world!<br>";
//print_r('Hello!!!<hr>');
//$str = 'Hello WORLD!!!';
//echo "<h1>$str</h1>";
$arr = [];
//$arr[0] = 1;
array_push($arr, 1,2,3,4,5);
//array_pop($arr);
//array_shift($arr);
foreach ($arr as $value){
    echo "<a href='test.php' style='color: #ff0000; text-decoration: none; font-size: 1.5em; font-weight: 2em'> Пункт $value</a><br>";
}
var_dump($arr);
//print_r($arr);