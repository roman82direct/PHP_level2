<?php
require_once '../config/DB.php';

$sql = "UPDATE `goods` SET `name`=:goodName, `price`=:goodPrice, `discription`=:goodDiscr WHERE `id_good`=:goodId";
$arg = ['goodName' => $_POST['title'], 'goodPrice' => $_POST['price'], 'goodDiscr' => $_POST['discr'], 'goodId' => $_POST['goodId']];
$res = db::update($sql, $arg);
if($res) {
    header('Location: ../public/index.php?act=view&c=goodedit&id_good='.$_POST['goodId']);
}