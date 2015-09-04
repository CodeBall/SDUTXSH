<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__/public_style.css"/>
    <title></title>
</head>
<body>
<h1>用户列表</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>用户名称</th>
        <th>真实姓名</th>
        <th>联系方式</th>
        <th>登录ip</th>
        <th>所属组别</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
            <td><?php echo ($v["user_id"]); ?></td>
            <td><?php echo ($v["user_name"]); ?></td>
            <td><?php echo ($v["user_nikename"]); ?></td>
            <td><?php echo ($v["user_tel"]); ?></td>
            <td><?php echo ($v["login_ip"]); ?></td>
            <td>
                <?php if($v["user_name"] == C("RBAC_SUPERADMIN")): ?>超级管理员
                <?php else: ?>
                    <ul>
                        <?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
                    </ul><?php endif; ?>
            </td>
            <td><a href="<?php echo U('Admin/Rbac/deleteUser',array('uid'=>$v['user_id']));?>">删除</a> </td>
        </tr><?php endforeach; endif; ?>
</table>
</body>
</html>