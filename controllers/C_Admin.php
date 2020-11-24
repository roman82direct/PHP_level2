<?php

class C_Admin extends C_Base
{

    public function action_index()
    {
        $this->title .= ' Админка';

//        $userRole = $_SESSION['user']['role'];
//        $admin = db::getRow('SELECT * FROM user_role where id_user = :userId', ['userId' => $userId]);

        $this->render('admin.html', ['title' => $this->title,  'admin' => $_SESSION['user']['role'], 'name' => $_SESSION['user']['name']]);
    }

    public function action_view()
    {
        $this->action_index();
    }
}
