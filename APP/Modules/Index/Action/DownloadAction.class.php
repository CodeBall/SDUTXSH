<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-11-1
 * Time: 上午12:28
 * 文件下载控制器
 */
class DownloadAction extends Action{
    public function file_download(){
        $uploadpath='./Uploads/file/';//设置文件上传路径，服务器上的绝对路径
        $id=$_GET['id'];//GET方式传到此方法中的参数id,即文件在数据库里的保存id.根据之查找文件信息。
        if($id==''){ //如果id为空而出错时，程序跳转到项目的Index/index页面。或可做其他处理。
            $this->display('没有找到该文件',U('Index/Index/index'));}
        $file=M('file');//利用与表file对应的数据模型类FileModel来建立数据对象。
        $result= $file->find($id);//根据id查询到文件信息
        if($result==false){ //如果查询不到文件信息而出错时，程序跳转到项目的Index/index页面。或可做其他处理
            $this->display('没有找到该文件',U('Index/Index/index'));}
        $savename=$file->file_savename;//文件保存名
        $showname=$file->file_truename;//文件原名
        $filename=$uploadpath.$savename;//完整文件名（路径加名字）
        //print_r($filename);die;
        import('ORG.Net.Http');
        Http::download($filename,$showname);
    }
}