<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-7
 * Time: 下午12:24
 */
Class ArticleRelationModel extends RelationModel{
    Protected $tableName = 'article';

    protected $_link = array(
        'attr' => array(
            'mapping_type'=>MANY_TO_MANY,
            'mapping_name'=>'attr',
            'foreign_key'=>'article_id',
            'relation_foreign_key'=>'attr_id',
            'relation_table'=>'article_attr'
        ),
        'cate' => array(
            'mapping_type' => BELONGS_TO,
            'foreign_key'=>'cid',
            'mapping_fields'=>'name',
            //在这种情况下，读取的数据只有一个，如果占用一个数组可能会太冗杂，所以可以将这个数据从三维数组中提取出来，
            //放在二维数组下。
            'as_fields'=>'name:cate_name',
        )
    );
}
?>