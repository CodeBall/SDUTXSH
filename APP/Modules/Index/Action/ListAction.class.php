<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-15
 * Time: 下午4:36
 */
Class ListAction extends Action{
    public function index(){
       $id = $_GET['id'];
        if($id == 1 || $id == 2)
            $this->display('about');
        else if($id == 3)
            $this->display('Students');
        else if($id == 4 || $id == 5)
            $this->display('zhongxin');
        else if($id == 6)
            $this->display('zhishu');
        else if($id == 7)
            $this->display('college');
        else if($id == 8 || $id == 10 || $id == 13 || $id == 14 || $id == 15 || $id == 11)
        {
            //新闻8，公告10,院会风采14，校园文化15，全体展示页面
            $this->biaoti = M('cate')->where(array('id'=>$id))->find();
            //实现分页操作
            import('ORG.Util.Page');
            $count = M('article')->where(array('cid'=>$id))->count();
            $page = new Page($count,15);
            $limit = $page->firstRow.','.$page->listRows;

            $field = array('id','title','time');
            $this->article = M('article')->field($field)->order('time desc')->where(array('cid'=>$id))->where(array('del'=>0))->limit($limit)->select();
            $this->page = $page->show();
            $this->display('news');
        }
        else if($id == 9)
            $this->display('Active');
    }
    //为机构设置分栏进行页面选择
    public function chouse_fen(){
        $id = $_GET['id'];
        if($id == 1){
            $this->display('zhishu');
        }
        else if($id == 2){
            $this->display('zhongxin');
        }
        else if($id == 3){
            $this->display('college');
        }
        else if($id == 4)
            $this->display('about');
        else if($id == 5)
            $this->display('Students');
    }
    //为文章展示页面进行页面调用
    public function article_show(){
        $id = $_GET['id'];
        $article = M('article')->where(array('id'=>$id))->find();
        if($article['cid'] == 13){
            import('ORG.Util.Page');
            $count = M('sign_up')->count();
            $page = new Page($count,20);
            $limit = $page->firstRow.','.$page->listRows;

            $this->stu = M('sign_up')->where(array('sign_cid'=>$id))->limit($limit)->select();
            $this->page = $page->show();
        }
        $this->article = $article;
        $this->display();
    }
    //报名活动
    public function sign(){
        $id = (int)$_GET['id'];
        $time=$_GET['time'];
        if($time == 0){
            $this->error('该活动已经结束报名');
        }
        else{
            $this->id = $id;
            $this->display();
        }
    }
    public function signHandle(){
        $data = array(
            'sign_name' => $_POST['sign_name'],
            'sign_num' => $_POST['sign_num'],
            'sign_school' => $_POST['sign_school'],
            'sign_college' => $_POST['sign_college'],
            'sign_class' => $_POST['sign_class'],
            'sign_time' => time(),
            'sign_status' => "未审核",
            'sign_cid' => $_POST['sign_cid'],
            'sugn_tel' => $_POST['sign_tel'],
        );
        if(M('sign_up')->add($data)){
            $this->success('报名成功，请耐心等待审核结果');
        }
        else{
            $this->error('报名失败');
        }
    }
    //添加账号
    public function AddAccount(){
        $this->display();
    }
    //添加账号表单处理
    public function AddAccountHandle(){
        //print_r($_POST);die;
        if($_POST['user_name'] == 'admin'){
            $this->error('注册失败,请更换注册账号信息');
        }
        else{
        //提取用户信息
        $user = array(
            'user_name'=>$_POST['user_name'],
            'user_password'=>I('user_password','','md5'),
            'user_nikename'=>$_POST['user_nikename'],
            'user_tel'=>$_POST['user_tel'],
            'user_status'=>$_POST['user_status'],
            'login_ip'=>get_client_ip()
        );
        if($uid = M('user')->add($user))
            $this->success('注册成功，等待审核',U('Index/Index/index'));
        else
            $this->error('注册失败');
        }
    }
}
?>