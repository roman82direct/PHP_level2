<?php
include_once "../config/config.php";
include '../models/dataDB.php';

if (isset($_POST['sign'])) {
    $name = (string)strip_tags($_POST['name']);
    $login = (string)strip_tags($_POST['login']);
    $email = (string)strip_tags($_POST['email']);
    $tel = (string)strip_tags($_POST['tel']);
    $salt = "8zxc6543vbfdse";
    $pass = $salt.md5(strip_tags($_POST['pass'])).$salt;

    $sql = "SELECT * FROM users";
    $result = getData($sql, $db);

    foreach ($result as $value) {
        if ($value['email'] == $email) {
            $exist = true;
        }
    }
        if (!$exist){
            $sql = "INSERT INTO users (name, email, tel, login, pass, role) VALUES ('$name', '$email', '$tel', '$login','$pass', '0')";
            $result = getData($sql, $db);
            $sql = "SELECT id FROM users where email = '$email' and pass='$pass'";
            $result = getData($sql, $db);

            if (count($result) > 0) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['pass'] = $pass;
                header("Location: ../public_html/gallery.php?user=true");
            } else echo "Ошибка!";
        }
        else {
            echo "Пользователь с таким эл. адресом уже зарегистрирован";
        }
}
//?>
<!--<a href="../public_html/gallery.php">Главная</a>-->

