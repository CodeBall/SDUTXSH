<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-2
 * Time: 上午8:02
 */
Class LoginAction extends Action{
    public function index(){
        $this->display();
    }
    public function login(){
        $user = M('user')->where(array('user_name'=>$_POST['user_name']))->find();
        if(!$user || $user['user_password'] != I('user_password','','md5')){
            $this->error('账号或密码错误',U('Admin/Login/index'));
        }
        //更新最后一次登陆ip
        $user = array(
            'user_id'=>$user['user_id'],
            'user_name'=>$user['user_name'],
            'user_password'=>I('user_password','','md5'),
            'login_ip'=>get_client_ip()
        );
        M('user')->save($user);
        //往session中写入数据
        session(C('USER_AUTH_KEY'),$user['user_id']);
        session('username',$user['user_name']);
        session('userpwd',I('user_password','','md5'));

        //超级管理员识别
        if($user['user_name'] == C('RBAC_SUPERADMIN')){
            session(C('ADMIN_AUTH_KEY'),true);
        }

        //读取用户权限
        import('ORG.Util.RBAC');
        RBAC::saveAccessList();

        $this->redirect('Admin/Index/index');
    }

}
?>