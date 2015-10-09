<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-7-8
 * Time: 上午8:47
 */
return array(

    'RBAC_SUPERADMIN'=>'admin',                     //指定超级管理员帐号

    'ADMIN_AUTH_KEY'=>'superadmin',                 //超级管理员识别

    'USER_AUTH_ON'=>true,                           //是否开启验证

    'USER_AUTH_TYPE'=>1,                            //验证类型（1为登录验证，2为时时验证）

    'USER_AUTH_KEY'=>'uid',                         //用户认证识别号

    'NOT_AUTH_MODULE'=>'Index',                     //无需认证的控制器

    //无需认证的控制方法
    'NOT_AUTH_ACTION'=>'addUserHandle,addRoleHandle,addNodeHandle,
    changeNodeHandle,setAccess,addArticleHandle,changeArticleHandle,addAttrHandle,
    changeAttrHandle,addCateHandle,changeCateHandle,setAccess,ChangePasHandle,ChangeUserHandle',

    'RBAC_ROLE_TABLE'=>'role',                      //角色表名称

    'RBAC_USER_TABLE'=>'role_user',                 //角色表和用户表的中间表名称

    'RBAC_NODE_TABLE'=>'node',                      //节点表名称

    'RBAC_ACCESS_TABLE'=>'access',                  //权限表名称


    'TMPL_PARSE_STRING'=>array(
        '__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Modules/'.GROUP_NAME.'/Tpl/Public'
    ),
);
?>