<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/public_style.css" />
    <title></title>
</head>
<body>
<form method="post" action="<?php echo U('Admin/Category/addCateHandle');?>">
<h1>添加栏目分类</h1>
<table class="table">
    <tr>
        <td align="right">分类栏目名称：</td>
        <td>
            <input type="text" name="name"/>
        </td>
    </tr>
    <tr>
        <td align="right">备注名称：</td>
        <td>
            <input type="text" name="nikename"/>
        </td>
    </tr>
    <tr>
        <td align="right">排序：</td>
        <td>
            <input type="text" name="sort" value="100"/>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2">
            <input type="hidden" name="pid" value="<?php echo ($pid); ?>"/>
            <input type="submit" value="保存添加"/>
        </td>
    </tr>
</table>
</form>
</body>
</html>