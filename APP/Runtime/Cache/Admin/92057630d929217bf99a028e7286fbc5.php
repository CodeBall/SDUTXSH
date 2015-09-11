<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__/public_style.css"/>
    <script type="text/javascript" src="__PUBLIC__/jquery-1.7.2.min.js"></script>
    <title></title>
    <style>
        .add-role{
            display: inline-block;
            width: 100px;
            height: 26px;
            line-height: 28px;
            text-align: center;
            border: 1px solid blue;
            border-radius: 4px;
            margin-left: 20px;
            cursor: pointer;
        }
    </style>
    <script type="text/javascript">
        $(function(){
           $('.add-role').click(function(){
               var obj = $(this).parents('tr').clone();
               obj.find('.add-role').remove();
               $('#last').before(obj);
           });
        });
    </script>
</head>
<body>
<form method="post" action="<?php echo U('Admin/Rbac/addUserHandle');?>">
    <h1>添加用户</h1>
    <table class="table">
        <tr>
            <td align="right">用户名：</td>
            <td><input type="text" name="user_name"/></td>
        </tr>
        <tr>
            <td align="right">密码：</td>
            <td><input type="password" name="user_password"/></td>
        </tr>
        <tr>
            <td align="right">真实姓名：</td>
            <td><input type="text" name="user_nikename"/></td>
        </tr>
        <tr>
            <td align="right">联系方式：</td>
            <td><input type="text" name="user_tel"/></td>
        </tr>
        <tr>
            <td align="right">所属角色：</td>
            <td>
                <select name="role_id[]">
                    <option value="">请选择角色</option>
                    <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
                </select>
                <span class="add-role">添加一个角色</span>
            </td>
        </tr>
        <tr id="last">
            <td colspan="2" align="center"><input type="submit" value="保存添加"/></td>
        </tr>
    </table>
</form>
</body>
</html>