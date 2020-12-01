<?php
require_once '../models/M_Validator.php';

class C_Validator extends C_Base
{
    public function action_index(){
        $this->title .= ' Отправлено...';
        $this->render('Catalog.html', ['title' => $this->title]);
    }

    public function action_regExp(){
        if ($this -> IsPost()){
            $valid = new M_Validator();
            $res = $valid->regExp();
        }
        $goods = db::getRows('SELECT * FROM goods limit 4', []);
        $this->render('Catalog.html', ['title' => $this->title,
            'catalog' => '1', 'goods' => $goods, 'mesName' => $res[0], 'mesTel' => $res[1], 'mesMail' => $res[2],
            'name' => $_POST['name'], 'tel' => $_POST['tel'], 'mail' => $_POST['email']]);
    }

}