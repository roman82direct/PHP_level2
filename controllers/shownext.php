<?php
require_once "../config/config.php";
include "../public_html/classes/Productitem.php";

$res = $db->query("SELECT * FROM `goods` order by `id` LIMIT 1");
$data = $res->fetch();
$minId = $data['id'];// Узнаем наименьший Id в БД

if (isset($_GET['next'])) {
    if ($_GET['next'] > $minId) {
        $result = $db->query("SELECT * FROM `goods` WHERE `id`<" . $_GET['next'] . " order by `id` desc LIMIT 4");
        while ($data = $result->fetch()) {
            $item = new Productitem($data['id'], $data['title'], $data['price'], $data['img'], $data['main-img'], $data['info'], $data['stock']);
            echo $item->render();
//            echo
//                "<div class='galitem'>" .
//                "<img src=" . "../admin/uploadimg/" . $data['img'] . ">" .
//                "<p>" . $data['title'] . "</p>" .
//                "<p class='itemId'>" . $data['id'] . "</p>" .
//                "<a href=" . "card.php?good=" . $data['id'] . " class=" . "buy1" . ">Купить</a>" .
//                "</div>";
        }
    } else return false;
} else echo "Error";

