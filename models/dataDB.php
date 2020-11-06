<?php
require_once "../config/config.php";

function getData($str, $db){
    $res = $db->prepare($str);
    $res->execute();
    return $result = $res->fetchAll(PDO::FETCH_ASSOC);
}
