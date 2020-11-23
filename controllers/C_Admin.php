<?php

class C_Admin extends C_Base
{

    public function action_index(){
        $this->title .= ' Админка';
        $this->render('admin.html', ['title' => $this->title, 'admin' => '1']);
    }
}
