<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-3
 * Time: 下午2:07
 */

//用户与角色关联模型
Class UserRelationModel extends RelationModel{

    Protected $tableName = 'user';//定义主表名称
    //定义关联关系
    Protected $_link = array(
        'role'=>array(
            //下面是关联关系，HAS_MANY是一对多的关系； HAS_ONE是一对一的关系；MANY_TO_MANY是多对多的关系,BELONGS_TO是多对一的关系，即主表是多，副表是一
            'mapping_type'=> MANY_TO_MANY,

            //指定主表和副表的外键
            'foreign_key'=>'user_id',
            'relation_key'=>'role_id',

            //指定中间表名称
            'relation_table'=>'role_user',
            //指定读取的字段
            'mapping_fields'=>'id,name,remark'
        )
    );
}
?>