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
        <a href="#">设为首页</a> |<a href="<?php echo U('Admin/Login/index');?>">在线投稿</a>
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

<div class="slide">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1" class=""></li>
            <li data-target="#carousel1" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item next left">
                <img src="__PUBLIC__/img/carousel-3.jpg" alt="0 slide">
            </div>
            <div class="item">
                <img src="__PUBLIC__/img/carousl-2.jpg" alt="1 slide">
            </div>
            <div class="item active left">
                <img src="__PUBLIC__/img/carousel-1.jpg" alt="2 slide">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="main">
    <div class="main-content">
        <div class="content-top">
            <div class="content-top-left">
            <a href="<?php echo U('Index/List/index',array('id' => 10));?>"><img src="__PUBLIC__/img/gonggao.png" alt=""/></a>
            <ul>
                <!--通知公告-->
                <?php if(is_array($gonggao)): $i = 0; $__LIST__ = array_slice($gonggao,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a class="title" href="<?php echo U('Index/List/article_show',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a><span style="float: right;padding-right: 10px"><?php echo (date('y-m-d',$v["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="content-top-right">
            <div class="content-top-right-title">
                <!--<h3>校会动态/<small>News</small>-->
                <div class="public-title">
                    <a href="<?php echo U('Index/List/index',array('id' => 8));?>"><h3>校会动态 / <small>News</small></h3></a>
                </div>
            </div>
            <div class="content-top-right-bot">
                <div class="content-top-right-bot1 pull-left">
                    <ul>
                        <?php if(is_array($dongtai)): $i = 0; $__LIST__ = array_slice($dongtai,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a class="title" href="<?php echo U('Index/List/article_show',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a><span class="pull-right"><?php echo (date('y-m-d',$v["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
                <div class="content-top-right-bot2 pull-right">
                    <ul>
                        <?php if(is_array($dongtai)): $i = 0; $__LIST__ = array_slice($dongtai,11,20,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a class="title" href="<?php echo U('Index/List/article_show',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a><span class="pull-right"><?php echo (date('y-m-d',$v["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="content-cen">
            <div class="content-cen1">
                <div class="public-title">
                    <a href="<?php echo U('Index/List/index',array('id' => 14));?>"><h3>院会风采 / <small>Style</small></h3></a>
                </div>
                <div style="width: 300px;height: 260px;clear: both;padding-top: 5px">
                    <ul>
                        <?php if(is_array($college_style)): $i = 0; $__LIST__ = array_slice($college_style,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li style="padding: 5px;list-style: none;margin-left: -30px"><a class="title" href="<?php echo U('Index/List/article_show',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?><span class="pull-right"><?php echo (date('y-m-d',$v["time"])); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    </tbody>
                </div>
            </div>
            <div class="content-cen2">
                <div style="width: 300px; height: 40px;">
                    <div class="public-title">
                        <a href="<?php echo U('Index/List/index',array('id' => 15));?>"><h3>校园文化 / <small>Culture</small></h3></a>
                    </div>
                </div>
                <ul><!--li<=7-->
                    <?php if(is_array($culture)): $i = 0; $__LIST__ = array_slice($culture,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a class="title" href="<?php echo U('Index/List/article_show',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a><span class="pull-right"><?php echo (date('y-m-d',$v["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="content-cen3">
                <a href="#"><img src="__PUBLIC__/img/video.jpg" alt=""/></a>
            </div>
        </div>
        <div class="content-bot">
            <div class="content-bot-title">
                <a href="#">青春印象</a>
            </div>
            <div id="colee_left">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td id="colee_left1" valign="top" align="center">
                                <table cellspacing="0" cellpadding="2" border="0">
                                    <tbody>
                                        <tr align="center">
                                            <td><p><a href=""><img src="__PUBLIC__/img/1.jpg" alt=""/></a></p></td>
                                            <td><p><a href=""><img src="__PUBLIC__/img/2.jpg" alt=""/></a></p></td>
                                            <td><p><a href=""><img src="__PUBLIC__/img/3.jpg" alt=""/></a></p></td>
                                            <td><p><a href=""><img src="__PUBLIC__/img/4.jpg" alt=""/></a></p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td id="colee_left2" valign="top" align="center">
                                <table cellspacing="0" cellpadding="2" border="0">
                                    <tbody>
                                        <tr align="center">
                                            <td><p><a href=""><img src="__PUBLIC__/img/1.jpg" alt=""/></a></p></td>
                                            <td><p><a href=""><img src="__PUBLIC__/img/2.jpg" alt=""/></a></p></td>
                                            <td><p><a href=""><img src="__PUBLIC__/img/3.jpg" alt=""/></a></p></td>
                                            <td><p><a href=""><img src="__PUBLIC__/img/4.jpg" alt=""/></a></p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
<script>

        var speed=30;
        var colee_left2=document.getElementById("colee_left2");
        var colee_left1=document.getElementById("colee_left1");
        var colee_left=document.getElementById("colee_left");
        colee_left2.innerHTML=colee_left1.innerHTML
        function Marquee3(){
            if(colee_left2.offsetWidth-colee_left.scrollLeft<=0)
                colee_left.scrollLeft-=colee_left1.offsetWidth
            else{
                colee_left.scrollLeft++
            }
        }
        var MyMar3=setInterval(Marquee3,speed)
        colee_left.onmouseover=function() {clearInterval(MyMar3)}
        colee_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}

    </script>

<script>
    $(document).ready(function () {
        $(".title").each(function() {
            var maxlength = 15;
            if($(this).text().length>maxlength) {
                $(this).text($(this).text().substring(0, maxlength));
                $(this).html($(this).html()+"...");
            }
        });
    });
</script>
</body>
</html>