<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="__PUBLIC__/login_style.css" />
    <link rel="stylesheet" href="__PUBLIC__/public_style.css" />
    <link rel="icon" href="/APP/Image/sdutxsh.png">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>

<div class="login">
    <form action="<?php echo U('Admin/Login/login');?>" method="post" id="login">
        <div class="title">
            山东理工大学学生会 | 登录后台
        </div>
        <table border="1" width="100%">
            <tr>
                <th>管理员帐号:</th>
                <td>
                    <input type="username" name="user_name" class="len250"/>
                </td>
            </tr>
            <tr>
                <th>密码:</th>
                <td>
                    <input type="password" class="len250" name="user_password"/>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left:160px;"> <input type="submit" class="submit" value="登录"/></td>
                <td colspan="2" style="padding-left:0px;"> <input type="reset" class="reset" value="重置"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>