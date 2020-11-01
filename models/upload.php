<?php
    $images = scandir("../img");
    for ($i=2; $i<count($images);$i++) {
        if ( $images[$i] == $_FILES['img']['name'] ){
        echo "Файл с таким именем уже загружен.<br>";
            $x = 1;
        }
    }
    if ( $x!=1 ){
    $path = "../img/".$_FILES['img']['name'];
        if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){
            header('Location: ../public/index.php');
        } else
            echo "Файл не выбран. Ошибка загрузки файла! ".$_FILES['img']['name']."<br>";   
    }

?>
<a href="../public/index.php">Вернуться</a>