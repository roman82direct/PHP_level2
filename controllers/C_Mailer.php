<?php
require_once '../models/M_Validator.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


class C_Mailer extends C_Base
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
            $mail = new PHPMailer();
            $mail->isSMTP();                   // Отправка через SMTP
            $mail->SMTPDebug = 0;              // 1 для просмотра лога  отправки
//            $mail->Host   = 'ssl://smtp.yandex.ru';  // Адрес SMTP сервера
//            $mail->Host = 'ssl://smtp.mail.ru';
            $mail->Host = 'ssl://smtp.gmail.com';

            $mail->SMTPAuth   = true;          // Enable SMTP authentication
            $mail->Username   = 'roman82direct';       // ваше имя пользователя (без домена и @)
            $mail->Password   = 'dev_pass2020';    // ваш пароль
            $mail->SMTPSecure = 'ssl';         // шифрование ssl
            $mail->Port   = 465;               // порт подключения
            $mail->CharSet = 'utf-8';
//            $mail->SMTPOptions = array(        //Настройки шифрования SMTP
//                'ssl' => array(
//                    'verify_peer' => false,
//                    'verify_peer_name' => false,
//                    'allow_self_signed' => true
//                )
//            );

            $mail->setFrom($_POST['email'], $_POST['name']);    // от кого
            $mail->addAddress('roman82direct@yandex.ru', 'Admin'); // кому
            $mail->addCC('roman82spb@mail.ru', 'Admin'); // кому

            $mail->Subject = 'Отправка почты с сайта Gamers';
//            $mail->msgHTML($_POST['message']);
            $mail->msgHTML("<html><body>
                <h3>Gamers mail:</h3>
                <p>".$_POST['message']."</p>
                <hr>
                </html></body>");
// Отправляем

////            Отправка при помощи mail() через OpenServer
////
////            $to = "roman82direct@yandex.ru";
////            $subject = "Gamers: новое сообщение";
////            $message = $_POST['message'];
////            $headers = "From: " .$_POST['name'] . "; email: ". $_POST['email'] . ";\r\nContent-type: text/plain; charset=windows-1251 \r\n";
////            $res = mail($to, $subject, $message, $headers);
            if ($mail->send()){
                $goods = db::getRows('SELECT * FROM goods limit 4', []);
                $this->render('Catalog.html', ['title' => 'Сообщение отправлено',
                    'catalog' => '1', 'goods' => $goods, 'message' => 'Сообщение успешно отправлено']);
            } else {
                $errorMessage = $mail->ErrorInfo;
//                $errorMessage = error_get_last()['message'];
                $goods = db::getRows('SELECT * FROM goods limit 4', []);
                $this->render('Catalog.html', ['title' => ' Ошибка сервера',
                    'catalog' => '1', 'goods' => $goods, 'message' => $errorMessage]);
            }
        }
    }
}