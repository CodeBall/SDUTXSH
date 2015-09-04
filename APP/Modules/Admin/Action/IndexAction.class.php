<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-1
 * Time: 下午8:55
 */
Class IndexAction extends CommonAction{
    public function index(){
        $this->display();
    }
    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/index');
    }
}
