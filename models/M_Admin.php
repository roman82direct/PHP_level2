<?phprequire_once '../config/DB.php';class M_Admin{    public function __construct($goodId, $goodName, $goodPrice, $goodDiscr){        $this->goodId = $goodId;        $this->goodName = $goodName;        $this->goodPrice = $goodPrice;        $this->goodDiscr = $goodDiscr;    }    public function delete_good(){        $sql = "DELETE FROM goods where id_good = :goodId";        $arg = ['goodId' => $this->goodId];        db::delete($sql, $arg);    }    public function save_good(){        $sql = "UPDATE `goods` SET `name`=:goodName, `price`=:goodPrice, `discription`=:goodDiscr WHERE `id_good`=:goodId";        $arg = ['goodName' => $this->goodName, 'goodPrice' => $this->goodPrice, 'goodDiscr' => $this->goodDiscr, 'goodId' => $this->goodId];        db::update($sql, $arg);    }    public function load_img(){        $id_good = $_POST['id_good'];        $path = "../public/catalogImg/".$_FILES['img']['name'];        if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){            $res = db::update('UPDATE `goods` SET `catalogImg`=:img WHERE `id_good`=:idGood',['img' => $_FILES['img']['name'], 'idGood' => $id_good]);            if($res) {                header('Location: ../public/index.php?act=view&c=goodedit&id_good='.$id_good);            }        } else            echo "Файл не выбран. Ошибка загрузки файла!<br>".                "<a href='../public/index.php?act=view&c=goodedit&id_good=" .$id_good ."'>Назад</a>";    }}