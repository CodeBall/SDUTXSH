<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0041)http://v3.bootcss.com/examples/dashboard/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/APP/Image/sdutxsh.png">

    <title>山东理工大学学生会</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v3.bootcss.com/examples/dashboard/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="__PUBLIC__/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <base target="iframe"/>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/Index/index');?>" target="_self" >山东理工大学学生会</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo U('Admin/Index/logout');?>" target="_self">退出系统</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="float: left;">
            <ul class="nav nav-sidebar">
                <li class="active">文章管理 <span class="sr-only">(current)</span></li>
                <li><a href="<?php echo U('Admin/Article/addArticle');?>">添加文章</a></li>
                <li><a href="<?php echo U('Admin/Article/index');?>">文章列表</a></li>
                <li><a href="<?php echo U('Admin/Article/trach');?>">回收站</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li class="active">分类管理 <span class="sr-only">(current)</span></li>
                <li><a href="<?php echo U('Admin/Category/addCate');?>">添加分类</a></li>
                <li><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li class="active">属性管理 <span class="sr-only">(current)</span></li>
                <li><a href="<?php echo U('Admin/Attribute/addAttr');?>">添加属性</a></li>
                <li><a href="<?php echo U('Admin/Attribute/index');?>">属性列表</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li class="active">权限管理 <span class="sr-only">(current)</span></li>
                <li><a href="<?php echo U('Admin/Rbac/addUser');?>">添加用户</a></li>
                <li><a href="<?php echo U('Admin/Rbac/index');?>">用户列表</a></li>
                <li><a href="<?php echo U('Admin/Rbac/addRole');?>">添加角色</a></li>
                <li><a href="<?php echo U('Admin/Rbac/role');?>">角色列表</a></li>
                <li><a href="<?php echo U('Admin/Rbac/addNode');?>">添加节点</a></li>
                <li><a href="<?php echo U('Admin/Rbac/node');?>">节点列表</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="width: 1000px;height: 700px;">
            <iframe name="iframe" src="" height="100%" width="100%"></iframe>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="__PUBLIC__/jquery.min.js"></script>
<script src="__PUBLIC__/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="__PUBLIC__/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="__PUBLIC__/ie10-viewport-bug-workaround.js"></script>


</body></html>