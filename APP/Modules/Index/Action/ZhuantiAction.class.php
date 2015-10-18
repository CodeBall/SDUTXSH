<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-10-11
 * Time: 上午9:50
 * 各个活动专题控制器
 */
Class ZhuantiAction extends Action{
    //我爱我师——我心中最爱的老师专题页面加载
    public function Loveteacher(){
        $this->jsfc = M('article')->where(array('cid'=>18))->where(array('del'=>0))->field(array('id','title','time'))->order('time desc')->select();
        $this->xytg = M('article')->where(array('cid'=>19))->where(array('del'=>0))->field(array('id','title','content','time'))->order('time desc')->select();
        $this->hddt = M('article')->where(array('cid'=>17))->where(array('del'=>0))->field(array('id','title','time'))->order('time desc')->select();

        $this->display();
    }
    //文章列表展示页面
    public function article_list(){
        $id = $_GET['id'];
        $this->biaoti = M('cate')->where(array('id'=>$id))->find();
        //实现分页操作
        import('ORG.Util.Page');
        $count = M('article')->where(array('cid'=>$id))->count();
        $page = new Page($count,15);
        $limit = $page->firstRow.','.$page->listRows;

        $field = array('id','title','time');
        $this->article = M('article')->field($field)->order('time desc')->where(array('cid'=>$id))->where(array('del'=>0))->limit($limit)->select();
        $this->page = $page->show();
        $this->display();
    }
}

?>