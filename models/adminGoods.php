<?phprequire_once '../config/DB.php';//require_once '../controllers/C_Catalog.php';//require_once '../controllers/C_Basket.php';//        $show = new C_Catalog();//        $show->showNext();echo $_GET['next'];if (isset($_GET['next'])) {    $req = "SELECT * FROM `goods`";    $goods = db::getRows($req, []);    foreach ($goods as $val) {        echo            "<div class='galitem'>" .            "<img src=" . "catalogImg/" . $val['catalogImg'] . ">" .            "<h3>" . $val['name'] . "</h3>" .            "<p class='itemId'>" . $val['id_good'] . "</p>" .            "<p class='itemprice'>" . $val['price'] . "$" . "</p>" .            "</div>";    }}else echo "ID не передан";