<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-1
 * Time: 下午8:58
 */
Class IndexAction extends Action{
    Public function index(){
        $this->gonggao = M('article')->where(array('cid'=>10))->field(array('id','title','time'))->order('time desc')->select();
        $this->dongtai = M('article')->where(array('cid'=>8))->field(array('id','title','time'))->order('time desc')->select();
        $this->college_style = M('article')->where(array('cid'=>13))->field(array('id','title','time'))->order('time desc')->select();
        $this->culture = M('article')->where(array('cid'=>14))->field(array('id','title','time'))->order('time desc')->select();

        $this->display();
    }
}