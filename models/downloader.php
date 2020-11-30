<?php
require_once '../config/DB.php';

$images = scandir("../public/catalogImg");

for ($i=2; $i<count($images);$i++) {
    if ( $images[$i] == $_FILES['img']['name'] ){
        echo "Файл с таким именем уже загружен.<br>";
        $x = 1;
    }
}
if ( $x!=1 ){
    $path = "../public/catalogImg/".$_FILES['img']['name'];
    if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){
//        header('Location: ../index.php');

//        $sql = "INSERT INTO `images`(`name`, `size`, `path` ) VALUES ('".$_FILES['img']['name']."', '".$_FILES['img']['size']."', '".$_SERVER['DOCUMENT_ROOT']."/img/"."')";
//        mysqli_query($link, $sql);

    } else
        echo "Файл не выбран. Ошибка загрузки файла!<br>";
}

?>
<a href="../index.php">Перейти в галерею</a>