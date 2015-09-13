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

<div class="main">
    <div class="college_xueyuan">
        <div class="college_left">
            <div class="biaotou">
                <span>机构设置</span>
            </div>
            <div class="biao"><a href="<?php echo U('Index/List/chouse_fen',array('id'=>2));?>">中心单位</a></div>
            <div class="biao"><a href="<?php echo U('Index/List/chouse_fen',array('id'=>1));?>">直属部门</a></div>
            <div class="biao"><a href="<?php echo U('Index/List/chouse_fen',array('id'=>3));?>">院级学生分会</a></div>
        </div>
        <div class="news-content-right">
            <h1>中心单位</h1>
            <div class="wenben">
                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>信息宣传中心</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会信息宣传中心是校学生会统一监管下的主管信息宣传的工作中心，设主任一名（副主席兼任）、副主任两名、部长四名，实行直属化管理，下设新闻部、宣传部、新媒体部、网络部四个职能部门。新闻部负责校学生会体系活动新闻报道，各类稿件撰写；宣传部负责条幅、展板、海报、PPT等设计和制作；新媒体部负责校学生会微信平台和微博、QQ空间运营；网络部负责校学生会网站建设、运营及维护。
                            <br />
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>马兴东&nbsp; 18766952362</p>
                        <h4>中心副主任：</h4><p>赵宗超 &nbsp;18753360910 <br/>成佳佳&nbsp; 18753370595 </p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/xxxc.JPG">
                    </div>
                </div>

                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>社团联合会</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学社团联合会(简称"校社联")是在校学生会统一监管下负责社团工作的工作中心单位（副主席兼任），是全校学生社团的联合性群众组织，是大学生社团进行自我管理、自我服务、自我监督的重要学生组织。校社联以"发展学生社团、繁荣校园文化、推进素质教育"为宗旨，带领大学生社团在校园文化建设中发挥着主力军的作用。
                            <br />
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>王文成&nbsp;18753360950</p>
                        <h4>中心副主任：</h4><p>吕晓敏&nbsp;18369908812 <br/> 迟铭巧&nbsp;18753361422</p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/xsl.jpg">
                    </div>
                </div>

                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>宿舍管理委员会</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会宿舍管理委员会是在校党委领导，学生工作处和校团委共同指导，公寓管理中心的具体指导下，辅导学生公寓日常管理和开展公寓文化建设的学生组织。宿管委以“自我约束，自我教育，自我管理，自我服务，自我创新，自我发展”为宗旨，以营造“文明、自律、创新、发展”的公寓文化为主旋律，以“创建高水平的大学生公寓”为工作的总目标。
                            <br />
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>江云华&nbsp; 18364377166</p>
                        <h4>中心副主任：</h4><p>朱永春 &nbsp;18753363568 <br/>安兴爽 &nbsp;18753363481 <br/>高 &nbsp;&nbsp; 原&nbsp; 18753364021 <br/>窦晶晶&nbsp; 18369908599 <br/>尹秀钤&nbsp; 18766953128 <br/>尹 &nbsp;&nbsp; 泉&nbsp; 18766953891 <br/>任俊宇 &nbsp;18753360377 </p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/ssglwyh.JPG">
                    </div>
                </div>

                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>科技创新与创业中心</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学科技创新与创业中心（简称：校科创）是校学生会统一监管下负责我校大学生科技创新与创业活动的工作中心（副主席兼任），下设七个部门，积极组织开展大型赛事、论他沙龙等丰富多彩的科技创新与创业活动，增强大学生的创新创业意识，营造浓厚的校园创新创业氛围。
                            <br />
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p> 高文健&nbsp;  18369905157</p>
                        <h4>中心副主任：</h4><p> 田方正  &nbsp;18753370736<br/>高晓龙 &nbsp; 18753360712 <br/>李&nbsp;&nbsp;&nbsp;&nbsp;涛  &nbsp;  18753364213</p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/kjcxycyzx.jpg">
                    </div>
                </div>


                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>大学生艺术团</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会艺术团是校学生会统一监管下负责文艺活动的工作中心（副主席兼任），以“提高学生艺术修养，丰富校园文化生活”的宗旨，着力引领校园文化氛围。大学生艺术团分为演艺部、舞蹈部、铜管部、技术部、综合部五个部门。艺术团自2003年成立以来，始终活跃在校园文艺前沿。举办了诸如迎新晚会、十佳歌手大赛、大学生科技文化艺术节等品牌活动，深受同学们的欢迎。
                            <br />
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>李晓晔&nbsp;18369905928</p>
                        <h4>中心副主任：</h4><p>左润男&nbsp;18253365990 <br/>陈柯仰&nbsp;13001506908<br/>刘明鑫&nbsp;18369901781 </p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/dxsyst.jpg">
                    </div>
                </div>

                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>青年志愿者协会</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会青年志愿者协会是校学生会统一监管下负责青年大学生社会公益的工作中心（副主席兼任），自2003年成立以来，一直奉行“以奉献扬青春，以文明树新风”的宗旨。协会下设四个部门，分别为：综合事务部，人力资源部，对外联络部，活动项目部。现有志愿者200余人，每年开展各类志愿服务活动和社会公益活动近百项。
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>&nbsp;丁晓宇 18766953112 </p>
                        <h4>中心副主任：</h4><p>刘洪杰&nbsp;18753364253  <br/> 李书田&nbsp;18753360979</p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/qnzyzxh.JPG"/>
                    </div>
                </div>

                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>素质拓展与认证中心</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会素质拓展与认证中心是校学生会下设工作中心单位（副主席兼任），参与学校知识、能力、素质三位一体人才培养体系中素质拓展学分的组织实施与认证工作。主要负责校园科技文化竞赛证书设计与印制，认证校园文化活动素质拓展学分。
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>&nbsp;张蓓 18369903896</p>
                        <h4>中心副主任：</h4><p> <br/> </p>
                    </div>
                    <div class="zhongxin_right">

                    </div>
                </div>

                <div class="zhongxin">
                    <div class="zhongxin_top">
                        <h2>安全委员会</h2>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会安全委员会是在校学生会统一监管下负责校园安全工作的工作中心（副主席兼任），由校团委和保卫处共同指导，为维护学校安全与稳定，进一步推进和谐校园建设做出贡献。安全委员会下设四个部门，分别为：综合部，信息部，安全管理部，消防部。
                            <br />
                        </p>
                    </div>
                    <div class="zhongxin_left">
                        <h4>中心主任：</h4><p>&nbsp;樊鲁鲁 18753363900</p>
                        <h4>中心副主任：</h4><p> <br/> </p>
                    </div>
                    <div class="zhongxin_right">
                        <img src="/APP/Image/awh.jpg">
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