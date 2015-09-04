<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-2
 * Time: 上午9:08
 */
Class RbacAction extends CommonAction{
    //用户列表
    public function index(){
        $field = array('user_id','user_name','user_nikename','user_tel','login_ip');
        $this->user = D('UserRelation')->field($field)->relation(true)->select();

        $this->display();
    }
    //添加用户
    public function addUser(){
        $this->role = M('role')->select();
        $this->display();
    }
    //添加用户表单处理
    public function addUserHandle(){
        //提取用户信息
        $user = array(
            'user_name'=>$_POST['user_name'],
            'user_password'=>I('user_password','','md5'),
            'user_nikename'=>$_POST['user_nikename'],
            'user_tel'=>$_POST['user_tel'],
            'login_ip'=>get_client_ip()
        );
        //提取用户所需角色信息
        $role = array();
        if($uid = M('user')->add($user)){
            foreach($_POST['role_id'] as $v){
                $role[] = array(
                    'role_id' => $v,
                    'user_id' => $uid
                );
            }
            M('role_user')->addAll($role);
            $this->success('添加用户成功',U('Admin/Rbac/index'));
        }
        else
            $this->error('添加用户失败');
    }
    public function deleteUser(){
        $uid = $_GET['uid'];
        if(M('user')->where(array('user_id'=>$uid))->delete()){
            M('role_user')->where(array('user_id'=>$uid))->delete();
            $this->success('删除用户成功',U('Admin/Rbac/index'));
        }
        else
            $this->error('删除用户失败');
    }
    //通过角色打印该角色的所有用户
    public function userStatistic(){

        $user_id = M('role_user')->where(array('role_id'=>$_GET['role_id']))->select();
        $user = M('user')->select();
        $user_role = array();
        foreach($user_id as $i){
            foreach($user as $j){
                if($i['user_id'] == $j['user_id'])
                {
                    $user_role[] = array(
                        'user_id' => $user['user_id'],
                        'user_name'=>$user['user_name'],
                        'user_naikename'=>$user['user_nikename'],
                        'user_tel'=>$user['user_tel'],
                        'login_ip'=>$user['login_ip'],
                    );
                }
            }
        }

        print_r($role_user);
    }
    //角色列表
    public function role(){
        $this->role = M('role')->select();
        $this->display();
    }
    //添加角色
    public function addRole(){
        $this->display();
    }
    //添加角色表单处理
    public function addRoleHandle(){
        if(M('role')->add($_POST)){
            $this->success("添加角色成功",U('Admin/Rbac/role'));
        }
        else
        {
            $this->error("添加角色失败");
        }
    }
    //节点列表
    public function node(){
        $field = array('id','name','title','pid');
        $node = M('node')->field($field)->order('sort')->select();
        $this->node = node_merge($node);

        $this->display();
    }
    //添加节点
    public function addNode(){
        $this->pid = I('pid',0,'intval');
        $this->level = I('level',1,'intval');

        switch($this->level){
            case 1:
                $this->type = '应用';
                break;
            case 2:
                $this->type = '控制器';
                break;
            case 3:
                $this->type = '动作方法';
                break;
        }
        $this->display();
    }
    //添加节点表单处理
    public function addNodeHandle(){
        if(M('node')->add($_POST)){
            $this->success("添加成功",U('Admin/Rbac/node'));
        }
        else
        {
            $this->error('添加失败');
        }
    }
    //修改节点
    public function changeNode(){
        $node_id = I('id',0,'intval');
        if($node_id == 0)
            $this->error("没有找到该节点");
        $this->node = M('node')->where(array('id'=>$node_id))->find();
        switch($this->node['level']){
            case 1:
                $this->type = '应用';
                break;
            case 2:
                $this->type = '控制器';
                break;
            case 3:
                $this->type = '动作方法';
                break;
        }
        $this->display();
    }
    //修改节点表单处理
    public function changeNodeHandle(){
        $id = I('id');
        $node = array(
            'name' => $_POST['name'],
            'title'=>$_POST['title'],
            'status'=>$_POST['status'],
            'sort'=>$_POST['sort']
        );
        if(M('node')->where(array('id'=>$id))->save($node)){
            $this->success('修改成功',U('Admin/Rbac/node'));
        }
        else
            $this->error('修改失败');
    }
    //删除节点
    public function deleteNode(){
        $id = I('id');
        if(M('node')->where(array('id'=>$id))->delete()){
            $this->success('删除节点成功',U('Admin/Rbac/node'));
        }
        else
            $this->error('删除节点失败');
    }
    //配置权限
    public function access(){
        $rid = I('rid',0,'intval');
        $field = array('id','name','title','pid');
        $node = M('node')->order('sort')->field($field )->select();

        //读取原有权限,getField()读取一维数组
        $access=M('access')->where(array('role_id'=>$rid))->getField('node_id',true);

        $this->node = node_merge($node,$access);
        $this->rid = $rid;
        $this->display();
    }
    public function setAccess(){
        $rid = I('rid',0,'intval');

        $db = M('access');
        //清空原来权限
        $db->where(array('role_id'=>$rid))->delete();
        $data = array();
        foreach($_POST['access'] as $v){
            $tmp = explode('_',$v);
            $data[] = array(
                'role_id'=>$rid,
                'node_id'=>$tmp[0],
                'level'=>$tmp[1]
            );
        }
        //插入新权限
        if($db->addAll($data)){
            $this->success('权限配置成功',U('Admin/Rbac/role'));
        }
        else
            $this->error('权限配置失败');
    }
}
?>