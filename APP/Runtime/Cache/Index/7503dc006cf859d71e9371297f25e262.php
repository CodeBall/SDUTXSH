<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/APP/Image/sdutxsh.png">
    <title>山东理工大学学生会</title>
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" type="text/css"/>
    <script src="__PUBLIC__/js/jquery-1.11.3.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/css/yangshi.css" type="text/css"/>
<link rel="stylesheet" href="__PUBLIC__/css/subpage.css" type="text/css"/>
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
    <div class="news-content">
        <div class="news-content-left">
            <div class="biaotou">
                <span>校会概况</span>
            </div>
            <div class="biao"><a href="<?php echo U('Index/List/chouse_fen',array('id'=>4));?>">校会简介</a></div>
            <div class="biao"><a href="<?php echo U('Index/List/chouse_fen',array('id'=>5));?>">学生干部</a></div>
        </div>
        <div class="news-content-right">
            <h1>校会简介</h1>
            <div class="wenben">
                   <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会是在校党委的领导下和校团委的指导下实行自我服务、自我管理、自我教育的学生自律群众组织，
                       代表和维护广大学生的根本利益，是学校党政联系广大同学的桥梁和纽带，是引导学生先进思想、维护学生合法权益、推进校园文化建设的主力军，具有法定性、政治性、官方性、唯一性。
                </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2015年山东理工大学学生会当选为全国学联第二十六届代表大会代表团体，校学生会主席刘锦韬同学作为全国学联二十五大正式代表参加了大会。
                   </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学生会下设20个分会、8个中心、9个职能部门，学生会实行主席团负责制。九个直属部门包括办公室、人力资源部、调研部、权益部、
                学习部、体育部、联络部、女生部、实践部。 近年来，学生会紧紧围绕“为同学的成长成才服务，为学校的改革发展服务”这一工作中心，
                开展了一系列有意义的校园文化活动，如“我爱我师 --- 我心中最爱的老师”评选活动、“告别陋习、握手文明”活动、英语系列讲座、
                校园十佳歌手大奖赛、“孝心献给爹娘，忠心献给祖国”主题活动、企业人走进大学生等，推进了校园文化的建设。
                学生会的维权服务更是校园一道靓丽的风景线，维权服务热线架起了一道沟通学校和同学的桥梁。</p>
                <p><span>工作理念：有困难找学生会</span></p>
                <p> <span>工作宗旨：自我教育 自我管理 自我服务</span></p>
                <p>  <span>工作定位：贴近社会热点 贴近学校发展 贴近学生成长</span></p>
                <p>   <span>工作作风：蓬勃朝气 昂扬士气 浩然正气</span></p>
                <p>  <span>工作要求：勤于学习 善于创造 乐于奉献</span></p>
                <p>  <span>工作使命：面向广大同学的共同愿望 面向特殊群体的不同要求 面向高水平大学学生会建设</span></p>
                <p>   <span>工作愿景：追求卓越 全面发展 共创和谐</span></p>

            </div>
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