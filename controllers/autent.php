<?php
include_once "../config/config.php";
include '../models/dataDB.php';

if (isset($_POST['login'])) {
        $salt = "8zxc6543vbfdse";
        $email = (!empty($_POST['email'])) ? strip_tags($_POST['email']) : '';
        $pass = (!empty($_POST['pass'])) ? $salt.md5(strip_tags($_POST['pass'])).$salt : '';

        $sql = "SELECT id FROM users where email = '$email' and pass='$pass'";
        $result = getData($sql, $db);

        if (count($result) > 0) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            header("Location: ../public_html/gallery.php?user=true");
        } else  header("Location: ../public_html/gallery.php?user=false");

//            die("Пользователь с такими учётными данными не зарегистрирован!");
    }

if ($_GET['action'] == 'logout') {
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    session_destroy();
    header('Location: ../public_html/gallery.php');
}

?>

