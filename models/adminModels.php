<?php
require_once '../config/DB.php';

// Ajax рендер товаров в админку
if (isset($_GET['goods'])) {
    $req = "SELECT * FROM `goods`";
    $goods = db::getRows($req, []);

    foreach ($goods as $val) {
        echo
            "<div class='galitem'>" .
            "<img src=" . "catalogImg/" . $val['catalogImg'] . ">" .
            "<h3>" . $val['name'] . "</h3>" .
            "<p class='itemId'>" . $val['id_good'] . "</p>" .
            "<p class='itemprice'>" . $val['price'] . "$" . "</p>" .

            "<form data-id='".$val['id_good']."' action='index.php?act=view&c=goodedit&id_good=".$val['id_good']."' method='post'>".
//              "<input type='hidden' name='add' value='"..'">".
            "<input type='submit' value='Редактировать' class='btn btn-primary'>".
            "</form>".

//            "<button data-id='". $val['id_good'] ."'>Редактировать</button>" .
            "</div>";
    }
}//else echo "ID не передан";

// Ajax рендер заказов в админку
if (isset($_GET['orders'])) {
    $req = "SELECT * FROM `orders`";
    $orders = db::getRows($req, []);

    foreach ($orders as $val) {
        $users = db::getRow('SELECT * FROM user where id_user = :userId', ['userId' => $val['id_user']]);

        echo
            "<div class='admOrder'>" .
            "<h4> Заказ №" . $val['id_order'] . "</h4>" .
            "<p class=''>Дата: " . $val['datetime_create'] . "</p>" .
            "<p class=''>Адрес доставки: " . $val['destination'] . "</p>" .
            "<p class=''>ID пользователя: " . $val['id_user'] . "</p>" .
            "<p class=''>Имя пользователя: " . $users['user_name'] . "</p>" .
            "<p class=''>Сумма заказа: " . $val['amount'] . "$</p>" .
            "<button id='".$val['id_order']."'>"."Редактировать</button>" .
            "<hr> </div>";
    }
}

// Загрузка нового фото в карточку товара
$images = scandir("../public/catalogImg");
$id_good = $_POST['id_good'];

//for ($i=2; $i<count($images);$i++) {
//    if ( $images[$i] == $_FILES['img']['name'] ){
//        echo "Файл с таким именем уже загружен.<br>".
//            "<a href='../public/index.php?act=view&c=goodedit&id_good=" .$id_good ."'>Назад</a>";
//        $x = 1;
//    }
//}
//if ( $x!=1 ){
$path = "../public/catalogImg/".$_FILES['img']['name'];
if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){

    $res = db::update('UPDATE `goods` SET `catalogImg`=:img WHERE `id_good`=:idGood',['img' => $_FILES['img']['name'], 'idGood' => $id_good]);
    if($res) {
        header('Location: ../public/index.php?act=view&c=goodedit&id_good='.$id_good);
    }
} else
    echo "Файл не выбран. Ошибка загрузки файла!<br>".
        "<a href='../public/index.php?act=view&c=goodedit&id_good=" .$id_good ."'>Назад</a>";
//}
