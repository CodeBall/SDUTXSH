<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-4
 * Time: 上午10:32
 */
Class CategoryAction extends CommonAction{
    //分类列表
    public function index(){
        import('Class.Category',APP_PATH);
        $cate = M('cate')->order('sort ASC')->select();
        $cate = Category::unlimitedForLevel($cate,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
        $this->cate = $cate;
        $this->display();
    }
    //添加分类
    public function addCate(){
        $this->pid = I('pid',0,'intval');
        $this->display();
    }
    //添加分类表单处理
    public function addCateHandle(){
        if(M('cate')->add($_POST)){
            $this->success('插入分类成功',U('Admin/Category/index'));
        }
        else
            $this->error('插入失败');
    }
    //更新排序
    public function sortCate(){
        $db = M('cate');
        foreach($_POST as $id=>$sort){
            $db->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('Admin/Category/index');
    }
    //修改
    public function changeCate(){
        $this->id = I('pid',0,'intval');
        $this->name = I('name');
        $this->nikename = I('nikename');
        $this->display();
    }
    public function changeCateHandle(){
        if(M('cate')->where(array('id'=>$_POST['id']))->save($_POST)){
            $this->success('修改分类成功',U('Admin/Category/index'));
        }
        else
            $this->error('修改失败');
    }
    //删除分类
    public function deleteCate(){
        $id = I('pid',0,'intval');
        $cate = M('cate')->where(array('pid'=>$id))->select();
        if($cate){
            $this->error('该分类下还有子分类，不能删除',U('Admin/Category/index'));
        }
        if(M('cate')->where(array('id'=>$id))->delete()){
            $this->success('删除分类成功',U('Admin/Category/index'));
        }
        else
            $this->error('删除失败');
    }
}
?>