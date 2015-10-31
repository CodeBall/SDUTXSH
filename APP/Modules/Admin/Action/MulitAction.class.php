<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-10-31
 * Time: 下午11:44
 * 多媒体控制器
 */

Class MulitAction extends CommonAction{

    //文件上传页面
    public function show_file_upload(){
        $this->display();
    }
    //文件上传操作
    public function file_upload(){
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        //$upload->maxSize  = 3145728 ;// 设置附件上传大小
        //$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './Uploads/file/';// 设置附件上传目录

        if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        }else{// 上传成功
            $info = $upload->getUploadFileInfo();
            $file = M('file');
            $data = array(
                'file_savepath'=>$info[0]['savepath'],
                'file_name'=>$info[0]['name'],
                'file_savename'=>$info[0]['savename'],
                'file_size'=>$info[0]['size'],
                'file_type'=>$info[0]['type'],
                'file_extension'=>$info[0]['extension'],
                'file_hash'=>$info[0]['hash']
            );
            if($file->add($data))
                $this->success('上传成功！');
            else
                $this->error('写入文件失败...');
        }
    }
}