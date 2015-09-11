<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/public_style.css" />
    <title></title>
</head>
<body>
<h1>活动报名人员信息</h1>
<table class="table">
    <tr>
        <th>姓名</th>
        <th>学号</th>
        <th>学校</th>
        <th>学院</th>
        <th>班级</th>
        <th>报名时间</th>
        <th>联系方式</th>
        <th>状态</th>
    </tr>
    <?php if(is_array($stu)): foreach($stu as $key=>$v): ?><tr>
            <td width="8%"><?php echo ($v["sign_name"]); ?></td>
            <td width="10"><?php echo ($v["sign_num"]); ?></td>
            <td width="13%"><?php echo ($v["sign_school"]); ?></td>
            <td width="20%"><?php echo ($v["sign_college"]); ?></td>
            <td width="10%"><?php echo ($v["sign_class"]); ?></td>
            <td width="13%"><?php echo (date('y-m-d H:i',$v["sign_time"])); ?></td>
            <td width="10%"><?php echo ($v["sign_tel"]); ?></td>
            <td width="16%">
                <?php if($v['sign_status'] == '接受'): ?>改为【<a href="<?php echo U('Admin/Article/change_sta',array('id'=>$v['sign_id'],'status'=>'不接受'));?>">不接受</a>】
                    <?php else: ?>
                        改为【<a href="<?php echo U('Admin/Article/change_sta',array('id'=>$v['sign_id'],'status'=>'接受'));?>">接受</a>】<?php endif; ?>
            </td>
        </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="8"><?php echo ($page); ?></td>
    </tr>
</table>
</body>
</html>