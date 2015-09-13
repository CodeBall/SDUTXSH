<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-5
 * Time: 上午9:02
 */
Class ArticleAction extends CommonAction{
    //文章列表
    public function index(){
        //实现分页操作
        import('ORG.Util.Page');
        $count = M('article')->count();
        $page = new Page($count,20);
        $limit = $page->firstRow.','.$page->listRows;
        //在读取主表的时候，如果只想读取表中的某几项，而只有很少的项是不读取的，那么可以先将不读取的项目列出来，然后去掉即可
        //在调用relation方法的时候，如果填写true，那么关联表中有多个表，就都会关联起来，如果只想关联其中的一个表，那么只需要写这个表的名称就可以了

        $this->article = D('ArticleRelation')->where(array('del'=>0))->relation(true)->limit($limit)->select();
        $this->page = $page->show();
        $this->display();
    }
    //删除到回收站
    public function toTrach(){
        $update = array(
            'id'=>(int) $_GET['id'],
            'del'=>1
        );
        if(M('article')->save($update)){
            $this->success('已经删除到回收站',U('Admin/Article/index'));
        }
        else
            $this->error('删除失败');
    }
    //回收站
    public function trach(){
        $this->article = D('ArticleRelation')->where(array('del'=>1))->relation(true)->select();
        $this->display();
    }
    //彻底删除文章
    public function deleteArticle(){
        if(M('article')->where(array('id'=>(int)$_GET['id']))->delete()){
            M('article_attr')->where(array('article_id'=>(int)$_GET['id']))->delete();
            $this->success('已经彻底删除文章',U('Admin/Article/trach'));
        }
        else
            $this->error('从回收站删除文章失败');
    }
    //还原文章
    public function restore(){
        $update = array(
            'id'=>(int) $_GET['id'],
            'del'=>0
        );
        if(M('article')->save($update)){
            $this->success('已经还原到文章列表',U('Admin/Article/index'));
        }
        else
            $this->error('还原失败');
    }
    //添加文章
    public function addArticle(){
        //读取文章所属分类
        import('Class.Category',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $this->cate = Category::unlimitedForLevel($cate);
        //读取文章属性
        $this->attr = M('attr')->select();

        $this->display();
    }
    //添加文章表单处理
    public function  addArticleHandle(){

        $data = array(
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'time'=>time(),
            'auther'=> $_POST['auther'],
            'cid'=>(int) $_POST['cid'],
            'del' => 1//该属性为1代表文章已经被删除，属行为0代表文章已经发表
        );
        if($bid = M('Article')->add($data)){
            if(isset($_POST['aid'])){
                $sql = 'INSERT INTO`'.C('DB_PREFIX').'article_attr`(article_id,attr_id) VALUES';
                foreach($_POST['aid'] as $v){
                    $sql .= '('.$bid.','.$v.'),';
                }
                $sql = rtrim($sql,',');
                M('article_attr')->query($sql);
            }
            $this->success('添加文章成功');
        }
        else
            $this->error('添加文章失败');
    }
    //修改文章
    public function changeArticle(){
        import('Class.Category',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $this->cate = Category::unlimitedForLevel($cate);
        //读取文章属性
        $this->attr = M('attr')->select();
        $id = (int) $_GET['id'];
        $this->Article = M('article')->where(array('id'=>$id))->find();
        $this->display();
    }
    //修改文章表单处理、
    public function changeArticleHandle(){
        $data = array(
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'time'=>time(),
            'auther'=> $_POST['auther'],
            'cid'=>(int) $_POST['cid']
        );
        if(M('Article')->where(array('id'=>$_POST['article_id']))->save($data)){
            if(isset($_POST['aid'])){
                M('article_attr')->where(array('article_id'=>$_POST['article_id']))->delete();
                $sql = 'INSERT INTO`'.C('DB_PREFIX').'article_attr`(article_id,attr_id) VALUES';
                foreach($_POST['aid'] as $v){
                    $sql .= '('.$_POST['article_id'].','.$v.'),';
                }
                $sql = rtrim($sql,',');
                M('article_attr')->query($sql);
            }
            $this->success('修改文章成功',U('Admin/Article/index'));
        }
        else
            $this->error('修改文章失败');
    }
    //结束活动报名
    public function over(){
        $id = (int)$_GET['id'];
        $data=array(
            'time'=>0
        );
        if(M('article')->where(array('id'=>$id))->save($data)){
            $this->success('活动报名已经成功结束',U('Admin/Article/index'));
        }
        else
            $this->error('活动报名结束失败');
    }
    //查看某一个活动的报名人员基本信息
    public function show_stu(){
        $id=(int)$_GET['id'];
        import('ORG.Util.Page');
        $count = M('sign_up')->count();
        $page = new Page($count,20);
        $limit = $page->firstRow.','.$page->listRows;

        $this->stu = M('sign_up')->where(array('sign_cid'=>$id))->limit($limit)->select();
        $this->page = $page->show();
        $this->display();
    }
    //修改个人状态信息
    public function change_sta(){
        $id = (int)$_GET['id'];
        $status = array(
            'sign_status'=>$_GET['status']
        );
        M('sign_up')->where(array('sign_id'=>$id))->save($status);
    }
}
?>

























