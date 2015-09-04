<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__/public_style.css"/>
    <link rel="stylesheet" href="__PUBLIC__/node.css"/>
    <title></title>
</head>
<body>
<div id="wrap">
    <a class="add-app" href="<?php echo U('Admin/Rbac/addNode');?>">添加应用</a>
   <br> <hr>
    <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
            <p>

                <strong><?php echo ($app["title"]); ?></strong>
                【<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>】
                【<a href="<?php echo U('Admin/Rbac/changeNode',array('id'=>$app['id']));?>">修改</a>】
                【<a href="<?php echo U('Admin/Rbac/deleteNode',array('id'=>$app['id']));?>">删除</a>】
            </p>
            <?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
                    <dt>
                        <strong><?php echo ($action["title"]); ?></strong>
                        【<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>3));?>">添加方法</a>】
                        【<a href="<?php echo U('Admin/Rbac/changeNode',array('id'=>$action['id']));?>">修改</a>】
                        【<a href="<?php echo U('Admin/Rbac/deleteNode',array('id'=>$action['id']));?>">删除</a>】
                    </dt>
                    <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                            <span><?php echo ($method["title"]); ?></span>
                            【<a href="<?php echo U('Admin/Rbac/changeNode',array('id'=>$method['id']));?>">修改</a>】
                            【<a href="<?php echo U('Admin/Rbac/deleteNode',array('id'=>$method['id']));?>">删除</a>】
                        </dd><?php endforeach; endif; ?>
                </dl><?php endforeach; endif; ?>
        </div><?php endforeach; endif; ?>
</div>
</body>
</html>