<?php
require_once '../config/DB.php';


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
//            echo 'DONE!!!'.
//            "<a href='../public/index.php?act=view&c=goodedit&id_good=" .$id_good ."'>Назад</a>";
        }
    } else
        echo "Файл не выбран. Ошибка загрузки файла!<br>".
            "<a href='../public/index.php?act=view&c=goodedit&id_good=" .$id_good ."'>Назад</a>";
//}

?>
