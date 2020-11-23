<?php

class C_Admin extends C_Base
{

    public function action_index()
    {
        $this->title .= ' Админка';

        $userId = $_SESSION['user']['id'];
        $admin = db::getRow('SELECT * FROM user_role where id_user = :userId', ['userId' => $userId]);

        $this->render('admin.html', ['title' => $this->title,  'admin' => $admin['id_role'], 'name' => $_SESSION['user']['login']]);
    }

    public function action_view()
    {
        $this->action_index();
    }
}
