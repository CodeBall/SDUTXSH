<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/APP/Image/sdutxsh.png">
    <title>山东理工大学学生会</title>
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" type="text/css"/>
    <script src="__PUBLIC__/js/jquery-1.11.3.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/css/yangshi.css" type="text/css"/>
<link rel="stylesheet" href="__PUBLIC__/css/article_show.css" type="text/css"/>
</head>
<body>
<script>
    $(function(){
        $(".dropdown").hover(
                function(){
                    $(this).find('ul').fadeIn(100);
                },
                function(){
                    $(this).find('ul').fadeOut(100);
                }
        );
    });
</script>
<div class="header">
    <div class="top"></div>
    <div class="top-content">
        <a href="#">设为首页</a> |<a href="#">收藏本站</a>
    </div>
</div>

<div class="public">
    <div class="logo">
        <div class="logo-left">
            <img src="__PUBLIC__/img/logo.png" alt=""/>
        </div>
        <div class="logo-right">
            <div class="search">
                <form action="">
                    <div class="search-in">
                        <input type="text" class="form-control" placeholder="请输入您要搜索的关键字"/>
                        <a href=""><span class="glyphicon glyphicon-search"></span></a>
                    </div>
                </form>
            </div>
            <div class="focus">
                <a href="#"><img class="weibo" src="__PUBLIC__/img/weibo.jpg" alt=""/></a>
                <a href="#"><img class="renren" src="__PUBLIC__/img/renren.jpg" alt=""/></a>
            </div>
        </div>
    </div>
    <nav>
        <?php $map['id'] = array('lt',14); $cate = M('cate')->order('sort')->where($map)->select(); import('Class.Category',APP_PATH); $cate = Category::unlimitedForLayer($cate); ?>
        <ul class="nav-list">
            <li class="nav-item border"><a href="<?php echo U('Index/Index/index');?>"><span>首页</span><br/><b>Home</b></a></li>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li class="nav-item border dropdown">
                    <a href="<?php echo U('/c_'.$v['id']);?>"><span><?php echo ($v["name"]); ?></span><br/><b><?php echo ($v["nikename"]); ?></b></a>
                    <?php if($v["child"]): ?><ul style="display: none" class="nav-submenu">
                            <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$value): ?><li class="nav-submenu-item"><a href="<?php echo U('/c_'.$value['id']);?>" target="_blank"><?php echo ($value["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul><?php endif; ?>
                </li><?php endforeach; endif; ?>
        </ul>
    </nav>
</div>

<div class="main">
    <div class="sign_handle">
        <form method="post" action="<?php echo U('Index/List/signHandle');?>">
            <h1>活动在线报名</h1>
            <table class="table" border="0">
                <tr>
                    <td width="40%" align="right">姓名：</td>
                    <td>
                        <input type="text" name="sign_name" />
                    </td>
                </tr>
                <tr>
                    <td align="right">学号：</td>
                    <td>
                        <input type="text" name="sign_num" />
                    </td>
                </tr>
                <tr>
                    <td align="right">学校：</td>
                    <td>
                        <input type="text" name="sign_school" />
                    </td>
                </tr>
                <tr>
                    <td align="right">学院：</td>
                    <td>
                        <input type="text" name="sign_college" />
                    </td>
                </tr>
                <tr>
                    <td align="right">班级：</td>
                    <td>
                        <input type="text" name="sign_class" />
                    </td>
                </tr>
                <tr>
                    <td align="right">联系方式：</td>
                    <td>
                        <input type="text" name="sign_tel" />
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="hidden" name="sign_cid" value="<?php echo ($id); ?>"/>
                        <input type="submit" value="保存添加" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="footer">
    <span>友情链接</span>
    <div class="nav">
        <ul>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li><a href="http://jwch.sdut.edu.cn/">教务处</a></li>
            <li><a href="http://lgwindow.sdut.edu.cn/">新闻网</a></li>
            <li><a href="http://www.lgqn.cn/">理工青年</a></li>
            <li><a href="http://www.youthol.cn/">青春在线</a></li>
            <li><a href="http://lib.sdut.edu.cn/index.html">图书馆</a></li>
            <li><a href="http://stgz.lgqn.cn/">社团联合</a></li>
        </ul>
    </div>
</div>
<div class="copyright"> Copyright © 2015 山东理工大学学生会 All Rights Reserved </div>
</div>