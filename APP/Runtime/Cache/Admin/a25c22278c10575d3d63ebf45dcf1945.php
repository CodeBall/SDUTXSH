<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/public_style.css" />
    <title></title>
</head>
<body>
<h1>属性列表</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>属性名称</th>
        <th>颜色</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td>
                <div style="width: 20px;height: 20px;background:<?php echo ($v["color"]); ?>"></div>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Admin/Attribute/changeAttr',array('id'=>$v['id'],'name'=>$v['name'],'color'=>$v['color']));?>">修改</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Admin/Attribute/deleteAttr',array('id'=>$v['id']));?>">删除</a>
            </td>
        </tr><?php endforeach; endif; ?>
</table>
</body>
</html>