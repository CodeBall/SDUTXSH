<?php
return array(
    //'配置项'=>'配置值'
    'APP_GROUP_LIST'=>'Index,Admin',
    'DEFAULT_GROUP'=>'Index',
    'APP_GROUP_MODE'=>1,
    'APP_GROUP_PATH'=>'Modules',
    //数据库配置
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => '',          // 数据库名
    'DB_USER'               => '',      // 用户名
    'DB_PWD'                => '',          // 密码
    'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8

    //URL配置
    'URL_ROUTER_ON'=>true,
    'URL_ROUTE_RULES'=>array(
        '/^c_(\d+)$/'=>'Index/List/index?id=:1'
    ),

);
?>