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
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style10.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/subpage.css" />
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
        <?php $map['id'] = array('lt',13); $cate = M('cate')->order('sort')->where($map)->select(); import('Class.Category',APP_PATH); $cate = Category::unlimitedForLayer($cate); ?>
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
        <div class="style10_bj">
            <div class="view view-eighth">
                <img src="/APP/Image/zljt.jpg" />
                <div class="mask">
                    <h2>刘锦韬</h2>
                    <p>电气与电子工程学院自动化专业2012班<br/>中共党员<br/>山东理工大学学生会主席<br/>15550342211</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zshx.jpg" />
                <div class="mask">
                    <h2>孙浩翔</h2>
                    <p>国防教育学院电信1201班<br/>中共预备党员<br/>山东理工大学学生会副主席<br/>18654696600</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/slz.jpg" />
                <div class="mask">
                    <h2>时立志</h2>
                    <p>文学与新闻传播学院中本1202班<br/><br/>山东理工大学学生会副主席<br/>18369909759</p>
                </div>
            </div>
        </div>
        <div class="style10_bj">
            <div class="view view-eighth">
                <img src="/APP/Image/zlbw.jpg" />
                <div class="mask">
                    <h2>刘博文</h2>
                    <p>化学工程学院化学工程与工艺13班<br/><br/>山东理工大学学生会副主席<br/>18753364179</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zmxd.jpg" />
                <div class="mask">
                    <h2>马兴东</h2>
                    <p><br/><br/>山东理工大学学生会副主席兼信息宣传中心主任<br/>18766952362</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zwwc.jpg" />
                <div class="mask">
                    <h2>王文成</h2>
                    <p>交通与车辆工程学院车辆工程1301班<br/>中共预备党员<br/>山东理工大学学生会副主席兼社团联合会理事长<br/>18753360950</p>
                </div>
            </div>
        </div>
        <div class="style10_bj">
            <div class="view view-eighth">
                <img src="/APP/Image/zjyh.jpg" />
                <div class="mask">
                    <h2>江云华</h2>
                    <p>体育学院运动训练1203班<br/>中共预备党员<br/>山东理工大学学生会副主席兼宿舍管理委员会主任<br/>18364377166</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zgwj.jpg" />
                <div class="mask">
                    <h2>高文健</h2>
                    <p>电气与电子工程学院电气1302班<br/>中共党员<br/>山东理工大学学生会副主席兼科技创新与创业中心主任<br/>18369905157</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zlxy.jpg" />
                <div class="mask">
                    <h2>李晓晔</h2>
                    <p>建筑工程学院测绘工程班<br/><br/>山东理工大学学生会副主席兼大学生艺术团团长<br/>18369905928</p>
                </div>
            </div>
        </div>
        <div class="style10_bj">
            <div class="view view-eighth">
                <img src="/APP/Image/zdxy.jpg" />
                <div class="mask">
                    <h2>丁晓宇</h2>
                    <p>文学与新闻传播学院中本1301班<br/>共青团员<br/>山东理工大学学生会副主席兼青年志愿者协会会长<br/>18766953112</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zzb.jpg" />
                <div class="mask">
                    <h2>张蓓</h2>
                    <p>化学工程学院化学1201班<br/>中共党员<br/>山东理工大学学生会副主席兼素质拓展与认证中心主任<br/>18369903896</p>
                </div>
            </div>
            <div class="view view-eighth">
                <img src="/APP/Image/zfll.jpg" />
                <div class="mask">
                    <h2>樊鲁鲁</h2>
                    <p>电气与电子工程学院电气1302班<br/><br/>山东理工大学学生会副主席兼安全委员会主任<br/>18753363900</p>
                </div>
            </div>
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