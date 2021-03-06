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
            <h1>直属部门</h1>
            <div class="wenben">
                <h2>办公室</h2>
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;办公室作为校学生会最重要的部门之一，是学生会中与学校各部门联系最紧密、与校方沟通最直接的部门。
                办公室始终坚持在校党委和校团委的正确领导及主席的直接领导下，秉承“为同学服务”的根本宗旨，
                开展一系列自我教育，自我管理，自我服务的活动。在协助校方打造良好的教学秩序和学习生活环境的同时，
                作为负责管理各大学生会日常事务、协调各部门工作开展的唯一职能部门，我们尽职尽责地完成部门的各项工作，
                且积极主动地协调其他各部门的工作，提高了整个学生会的工作效率，充分发挥着在校学生会作为调配器的重要作用。
                </p>
                <h2>人力资源部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校学生会人力资源部坚持“包容、和谐、团结、奋进”的工作理念，
                    助推学生会正一步步发展为全校最高效的学生机构，同时为每一位渴求上进的成员提供锻炼的平台，
                    以获得在未来职业生涯中必须的工作素质。它将以富有创造力的工作为学生会吸纳、储备、培训更多优秀人才，
                    为学生会工作更加民主化、制度化、公开化做出不懈的努力。作为校学生会最有权威的部门之一，充满无限的活力和热情，
                    旨在建立一个温暖、和谐的大家庭。
                </p>
                <h2>调研部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;调研部是学生会协助学校与同学相互联系、沟通的专门部门，本着“全心全意为同学服务”的宗旨，组织开展各类调研活动及大学生调研大赛，
                    积极、客观地了解我校同学的关注热点、思想动态，及时、全面地反映广大同学在学习和生活中遇到的各种困难，
                    为学校有关部门制定相关政策规定提供依据和参考建议，更好地服务同学、服务大局。
                </p>
                <h2>权益部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;权益部的主要工作是维护同学们的合法权益，向学校相关部门表达同学们的诉求，
                    成为学生与相关部门沟通的桥梁，并为同学们提供办事的指引。具体表现为在餐厅等个地点建立权益值班台，每天有专人负责值班，
                    悉心听取同学们的意见。并且每月都会举办座谈会，邀请各学院同学商讨权益，听取意见。并且还会不定期举办调研活动，调查同学们的诉求。
                </p>
                <h2>学习部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学学生会学习部，为协助校园学风建设、贯彻党的教育方针、创建良好的学习环境而设立。
                    承办稷下湖畔对话、各种学术性竞赛等素质拓展活动，
                    组织开展各种学习竞赛和学习经验、学习方法的交流活动，以丰富大学生校园生活，培养大学生创新能力、科研能力和组织能力，建设良好的学术氛围；
                    参与举办稷下大讲堂等校级活动，协助学校教务部门开展相关工作，促进校园各院系学生交流，加强各学院学习部门之间的联系；
                    积极参与学风建设，为同学的学习活动提供相应的服务，建设和谐校园。
                </p>
                <h2>体育部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体育部是学生体育活动的先锋队和带头人。以“开展体育活动，增强学生体质”为宗旨。并在此思想的指导下开展大量的形式多样、内容丰富的全民健身活动。品牌活动有:一二、九万米接力、阳光体育节。
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体育部是山东理工大学学生会的一个重要分支，工作始终围绕“普及体育知识，引导在校学生积极参加体育锻炼”来竭尽所能为广大同学提供参与体育运动的舞台，来丰富同学们的课余生活、促进在校学生间间的交流以及不同学院间的沟通合作，让同学们在繁忙的学习后得到体育锻炼，从中获得快乐、放松身心、增强体质。
                </p>
                <h2>联络部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;山东理工大学校学生会联络部是山东理工大学校学生会十个部门之一，联络部主要职责有以下几个方面：
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.策划举办“主席论坛”活动。联络部每学期都会定期举办一届“主席论坛”活动，就学校学生工作的建设和开展进行讨论，与会人员由各大校级组织主要负责人和各学院的主席团成员构成，目的是为了更好的完善组织制度和更好服务同学。
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.为学校的活动争取外部支持。联络部在学校举办大型活动时会和校内外商家进行洽谈合作，为学校活动争取外部支持。
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.联系兄弟高校学生组织和校内各学院组织的职责。
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作为校学生会十大部门之一，联络部正在以一个良好的态度来服务同学，为校学生会的学生工作开展贡献自己的一份力。
                </p>
                <h2>女生部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;女生部是一个根据女生自身兴趣爱好以及需求，
                    设计并开展关于礼仪培训、服装搭配、美食DIY、彩妆、心理等各方面活动来为女生服务，维护女生权益，解决女生问题的部门。
                    山东理工大学校女生部“卓越女生素质拓展营”同时也是一个提供给女生发挥特长，展现风采的舞台，
                    帮助女生树立自尊、自爱、自强、自立、自主、自信的新时代女性形象，让理工大女生更加年轻、活力、快乐、阳光、向上。
                    这就是女生部，一个引领时尚潮流、精通各种化妆穿衣技巧、品尝各类美食、温馨而快乐的大家庭，
                    We&nbsp;are&nbsp;girls,we&nbsp;speak&nbsp;for&nbsp;ourselves.
                </p>
                <h2>实践部</h2>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;实践部致力于策划、组织各项社会实践，汇总各社会实践队伍申报材料、社会实践活动评定工作的开展以及实践成果的展示，旨在搭起广大青年大学生接触社会、服务社会的桥梁。实践部的工作宗旨是促进广大青年大学生投身社会实践，培养青年大学生奉献精神和开创精神，使其在社会实践中不断充实完善自我，提高社会责任感和科学实践能力。
                </p>
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