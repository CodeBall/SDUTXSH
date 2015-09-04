<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__/public_style.css"/>
    <title></title>
</head>
<body>
<h1>角色列表</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>角色名称</th>
        <th>角色描述</th>
        <th>开启状态</th>
        <th>用户管理</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["remark"]); ?></td>
            <td>
                <?php if($v["status"]): ?>开启<?php else: ?>关闭<?php endif; ?>
            </td>
            <td><a href="<?php echo U('Admin/Rbac/userStatistic',array('role_id'=>$v['id']));?>">用户管理</a> </td>
            <td>
                <a href="<?php echo U('Admin/Rbac/access',array('rid'=>$v['id']));?>">权限配置</a>
            </td>
        </tr><?php endforeach; endif; ?>
</table>
</body>
</html>