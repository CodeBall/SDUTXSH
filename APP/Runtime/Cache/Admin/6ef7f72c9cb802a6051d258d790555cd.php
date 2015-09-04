<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/public_style.css" />
    <title></title>
</head>
<body>
<h1>文章列表</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>标题</th>
        <th>作者</th>
        <th>所属分类</th>
        <th>发布时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($article)): foreach($article as $key=>$v): ?><tr>
            <td width="8%"><?php echo ($v["id"]); ?></td>
            <td>
                <?php echo ($v["title"]); ?>
                <?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><strong style="color:<?php echo ($value["color"]); ?>">【<?php echo ($value["name"]); ?>】</strong><?php endforeach; endif; ?>
            </td>
            <td width="20%"><?php echo ($v["auther"]); ?></td>
            <td width="10%"><?php echo ($v["cate_name"]); ?></td>
            <td width="13%"><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
            <td width="17%">
                【<a href="<?php echo U('Admin/Article/toTrach',array('id'=>$v['id']));?>">删除</a>】
                【<a href="<?php echo U('Admin/Article/changeArticle',array('id'=>$v['id']));?>">编辑</a>】
                <?php if($v['time']): if($v['cate_name'] == '在线报名'): ?>【<a href="<?php echo U('Admin/Article/over',array('id'=>$v['id']));?>">结束</a>】
                        【<a href="<?php echo U('Admin/Article/show_stu',array('id'=>$v['id']));?>">查看</a>】<?php endif; endif; ?>
            </td>
        </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="6"><?php echo ($page); ?></td>
    </tr>
</table>
</body>
</html>