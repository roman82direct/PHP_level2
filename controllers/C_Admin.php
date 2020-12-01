<?php
require_once('../models/M_Admin.php');

class C_Admin extends C_Base {

    public function action_index(){
        $this->title .= ' Админка';
        $this->render('admin.html', ['title' => $this->title,  'admin' => $_SESSION['user']['role'], 'name' => $_SESSION['user']['name']]);
    }

    public function action_view(){
        $this->action_index();
    }

    public function action_renderGoods(){

    }

    public function action_renderOrders(){

    }

    public function action_changeImg(){

    }

    public function action_saveGood(){
        echo $_POST['goodId'];
        if ($this -> IsPost()){
            $admin = new M_Admin($_POST['goodId'], $_POST['title'], $_POST['price'], $_POST['discr']);
            $admin->saveGood();
        }
        $this->action_index();
    }

    public function action_deleteGood(){

    }

    public function action_loadnewGood(){

    }
}
