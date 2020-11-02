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
            $item = new Productitem($data['id'], $data['title'], $data['price'], $data['img'], $data['main_img'], $data['info'], $data['stock']);
            echo $item->render();
        }
    } else return false;
} else echo "Error";

