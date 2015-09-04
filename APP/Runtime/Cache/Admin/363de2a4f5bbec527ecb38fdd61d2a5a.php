<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__/public_style.css"/>
    <title></title>
</head>
<body>
<h1>修改<?php echo ($type); ?></h1>
<form method="post" action="<?php echo U('Admin/Rbac/changeNodeHandle');?>">
    <table class="table">
        <tr>
            <td align="right"><?php echo ($type); ?>名称：</td>
            <td> <input type="text" name="name" value="<?php echo ($node['name']); ?>"/></td>
        </tr>
        <tr>
            <td align="right"><?php echo ($type); ?>描述：</td>
            <td> <input type="text" name="title" value="<?php echo ($node['title']); ?>"/></td>
        </tr>
        <tr>
            <td align="right">是否开启：</td>
            <td>
                <input type="radio" name="status" value="1" checked="checked"/>&nbsp;开启&nbsp;
                <input type="radio" name="status" value="0"/>&nbsp;关闭
            </td>
        </tr>
        <tr>
            <td align="right">排序</td>
            <td>
                <input type="text" name="sort" value="1"/>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="pid" value="<?php echo ($node['pid']); ?>"/>
                <input type="hidden" name="level" value="<?php echo ($node['level']); ?>"/>
                <input type="hidden" name="id" value="<?php echo ($node['id']); ?>"/>
                <input type="submit" value="保存修改"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>