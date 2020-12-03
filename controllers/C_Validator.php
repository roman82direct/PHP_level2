<?php
require_once '../models/M_Validator.php';

class C_Validator extends C_Base
{
    public function action_index(){
    }

    public function action_regExp(){
        if ($this -> IsPost()){
            $valid = new M_Validator();
            $res = $valid->regExp();
        }
        if (!empty($res[0]) || !empty($res[1]) || !empty($res[2])) {
            $goods = db::getRows('SELECT * FROM goods limit 4', []);
            $this->title .= ' Не верно заполнены поля';
            $this->render('Catalog.html', ['title' => $this->title,
                'catalog' => '1', 'goods' => $goods, 'mesName' => $res[0], 'mesTel' => $res[1], 'mesMail' => $res[2],
                'name' => $_POST['name'], 'tel' => $_POST['tel'], 'mail' => $_POST['email'], 'error' => $res[0] . $res[1] . $res[2],
                'date' => date('d-M-Y;  H-i')]);
        } else {
            $to = "roman82direct@yandex.ru";
            $subject = "Gamers: новое сообщение";
            $message = $_POST['message'];
            $headers = "From: " .$_POST['name'] . "; email: ". $_POST['email'] . ";\r\nContent-type: text/plain; charset=windows-1251 \r\n";
            $res = mail($to, $subject, $message, $headers);
            if ($res){
                $goods = db::getRows('SELECT * FROM goods limit 4', []);
                $this->render('Catalog.html', ['title' => 'Сообщение отправлено',
                    'catalog' => '1', 'goods' => $goods, 'message' => 'Сообщение успешно отправлено']);
            } else {
                $errorMessage = error_get_last()['message'];
                $goods = db::getRows('SELECT * FROM goods limit 4', []);
                $this->render('Catalog.html', ['title' => ' Ошибка сервера',
                    'catalog' => '1', 'goods' => $goods, 'message' => $errorMessage]);
            }
        }
    }
}