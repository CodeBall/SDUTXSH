<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/public_style.css" />
    <script type="text/javascript">
        window.UEDITOR_HOME_URL = '/Ueditor/';
        window.onload = function () {
            window.UEDITOR_CONFIG.initialFrameHeight = 600;
            window.UEDITOR_CONFIG.initialFrameWidth = 950;
            UE.getEditor('content');
        }
    </script>
    <script type="text/javascript" src="/Ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/Ueditor/ueditor.all.min.js"></script>
    <title></title>
</head>
<body>
<form method="post" action="<?php echo U('Admin/Article/addArticleHandle');?>">
    <h1>发布文章</h1>
    <table class="table">
        <tr>
            <td align="right" width="10%">所属分类：</td>
            <td>
                <select name="cid">
                    <option value="">====请选择分类====</option>
                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">文章属性：</td>
            <td>
                <?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label style="margin-right: 10px; ">
                        <input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>"/>&nbsp;<?php echo ($v["name"]); ?>
                    </label><?php endforeach; endif; ?>
            </td>
        </tr>
        <tr>
            <td align="right">作者：</td>
            <td><input type="text" name="auther"/></td>
        </tr>
        <tr>
            <td align="right">文章标题：</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea name="content" id="content"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="保存添加"/></td>
        </tr>
    </table>
</form>
</body>
</html>