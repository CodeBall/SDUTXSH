<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/public_style.css" />
    <title></title>
</head>
<body>
<form action="<?php echo U('Admin/Category/sortCate');?>" method="post">
    <h1>分类列表</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>备注</th>
            <th>级别</th>
            <th>排序</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
                <td><?php echo ($v["nikename"]); ?></td>
                <td><?php echo ($v["level"]); ?></td>
                <td>
                    <input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>"/>
                </td>
                <td>
                    【<a href="<?php echo U('Admin/Category/addCate',array('pid'=>$v['id']));?>">添加子分类</a>】
                    【<a href="<?php echo U('Admin/Category/changeCate',array('pid'=>$v['id'],'name'=>$v['name'],'nikename'=>$v['nikename']));?>">修改</a>】
                    【<a href="<?php echo U('Admin/Category/deleteCate',array('pid'=>$v['id']));?>">删除</a>】
                </td>
            </tr><?php endforeach; endif; ?>
        <tr>
            <td colspan="5" align="center">
                <input type="submit" value="排序"/>
            </td>
        </tr>
</table>
</form>
</body>
</html>