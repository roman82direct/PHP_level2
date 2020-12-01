<?php


class C_Validator
{

    public function __construct()
    {
        $this->patterns = [
            'name'=> '/^[a-zа-яё]+$/i',
            'tel'=> '/^\+?(7|8)(\(|-)?\d{3}(\)|-)?\d{3}-?\d{2}-?\d{2}$/',
            'mail'=>'/^[\w._-]+@\w+\.[a-z]{2,4}$/i'
        ];
        $this->errors =[
            'name'=> 'Имя должно содержать только буквы',
            'tel'=> 'Телефон в формате +7(000)000-0000',
            'mail'=>'E-mail в формате mymail@mail.ru, или my.mail@mail.ru, или my-mail@mail.ru'
        ];
    }

    public function action_regExp(){
        if (isset($_POST['name']) && isset($_POST['email'])){
            $name = $_POST['name'];
            $mail = $_POST['email'];
            if(preg_match($this->patterns['name'], $name)){
                echo "Name - OK";
            } else echo $this->errors['name'];

            if(preg_match($this->patterns['mail'], $mail)){
                echo "mail - OK";
            } else echo $this->errors['mail'];

        } else echo "Данные не введены";
    }

}