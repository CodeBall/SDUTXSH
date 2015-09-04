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
<link rel="stylesheet" href="__PUBLIC__/css/college.css" type="text/css"/>
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
        <?php $cate = M('cate')->order('sort')->select(); import('Class.Category',APP_PATH); $cate = Category::unlimitedForLayer($cate); ?>
        <ul class="nav-list">
            <li class="nav-item border"><a href="<?php echo U('Index/Index/index');?>"><span>首页</span><br/><b>Home</b></a></li>
            <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li class="nav-item border dropdown">
                    <a href="<?php echo U('Index/College/index');?>"><span><?php echo ($v["name"]); ?></span><br/><b><?php echo ($v["nikename"]); ?></b></a>
                    <?php if($v["child"]): ?><ul style="display: none" class="nav-submenu">
                            <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$value): ?><li class="nav-submenu-item"><a href="#" target="_blank"><?php echo ($value["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul><?php endif; ?>
                </li><?php endforeach; endif; ?>
        </ul>
    </nav>
</div>

<div class="main">
    <div class="college_xueyuan">
        <div class="college_left">
            <div class="biaotou">
                <span>机构设置</span>
            </div>
            <div class="biao"><a href="#">直属部门</a></div>
            <div class="biao"><a href="#">中心单位</a></div>
            <div class="biao"><a href="#">院级学生分会</a></div>
        </div>
        <div class="college_right">
            <ul>
                <li><a href="#">机械工程学院</a></li>
                <li><a href="#">农业工程与食品科学学院</a></li>
                <li><a href="#">计算机科学与技术学院</a></li>
                <li><a href="#">建筑工程学院</a></li>
                <li><a href="#">材料科学与工程学院</a></li>
                <li><a href="#">理学院</a></li>
                <li><a href="#">文学与新闻传播学院</a></li>
                <li><a href="#">法学院</a></li>
                <li><a href="#">美术学院</a></li>
                <li><a href="#">体育学院</a></li>
                <li><a href="#">鲁泰纺织服装学院</a></li>

                <li><a href="#">交通与车辆工程学院</a></li>
                <li><a href="#">电气与电子工程学院</a></li>
                <li><a href="#">化学工程学院</a></li>
                <li><a href="#">资源与环境工程学院</a></li>
                <li><a href="#">生命科学学院</a></li>
                <li><a href="#">商学院</a></li>
                <li><a href="#">外国语学院</a></li>
                <li><a href="#">马克思主义学院</a></li>
                <li><a href="#">音乐学院</a></li>
                <li><a href="#">国防教育学院</a></li>
            </ul>
        </div>
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