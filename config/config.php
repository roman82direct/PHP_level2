<?php
session_start();

define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_NAME','gamers');
define('DB_USER','root');
define('DB_PASS','root');

try {
    $connect_str = DB_DRIVER . ':host='. DB_HOST . ';port=3307' . ';dbname=' . DB_NAME;
    $db = new PDO($connect_str,DB_USER,DB_PASS);
} catch(PDOException $e) {
    die("Error: ".$e->getMessage());
}