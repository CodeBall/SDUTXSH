<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-4
 * Time: 下午9:13
 */
Class AttributeAction extends CommonAction{
    //属性列表
    public function index(){

        $this->attr = M('attr')->select();
        $this->display();
    }
    //添加属性
    public function addAttr(){
        $this->display();
    }
    //添加属性表单处理
    public function addAttrHandle(){
       if(M('attr')->add($_POST))
       {
           $this->success('添加属性成功',U('Admin/Attribute/index'));
       }
        else
            $this->error('添加属性失败');
    }
    //修改属性
    public function changeAttr(){
        $this->id = I('id',0,'intval');
        $this->name = I('name');
        $this->color = I('color');
        $this->display();
    }
    public function changeAttrHandle(){
        if(M('attr')->where(array('id'=>$_POST['id']))->save($_POST))
        {
            $this->success('修改属性成功',U('Admin/Attribute/index'));
        }
        else
            $this->error('修改属性失败');
    }
    //删除属性
    public function deleteAttr(){
        $id = I('id',0,'intval');
        if(M('attr')->where(array('id'=>$id))->delete()){
            $this->success('删除属性成功',U('Admin/Attribute/index'));
        }
        else
            $this->error('删除属性失败');
    }
}
?>