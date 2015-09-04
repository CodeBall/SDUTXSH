<?php
/**
 * Created by PhpStorm.
 * User: xqq
 * Date: 15-8-4
 * Time: 下午5:03
 */
Class Category{
    //这个方法只是为了将就等级区分出来,返回的数组是一个一维数组，只是根据等级重新排列了一番
    Static Public function unlimitedForLevel($cate,$html='--',$pid = 0,$level = 0){
        $arr = array();
        foreach($cate as $v){
            if($v['pid']==$pid){
                $v['level'] = $level + 1;
                //每一个级别深入下去，区分符号就增加一份‘--’
                $v['html'] = str_repeat($html,$level);
                $arr[] = $v;
                $arr = array_merge($arr,self::unlimitedForLevel($cate,$html,$v['id'],$level+1));
            }
        }
        return $arr;
    }
    //这个方法是为了构成多维数组，通过数组来体现等级之分,一般用于导航栏的等级分类
    Static Public function unlimitedForLayer($cate,$pid = 0){
        $arr = array();
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $v['child'] = self::unlimitedForLayer($cate,$v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }
    //这个方法是根据子集的id返回父级的所有内容
    Static Public function getParents($cate,$id){
        $arr = array();
        foreach($cate as $v){
            if($v['id'] == $id){
                $arr[] = $v;
                //在递归完成之后，父级是在子集的后面，但是我们在往外打印的时候，通常都是先打印父级，再打印子集，
                //所以在组成数组的时候，我们先递归，再和原来的数组arr相结合，即下面array_merge函数的传参方法
                $arr = array_merge(self::getParents($cate,$v['pid'],$arr));
            }
        }
        return $arr;
    }
    //这个方法适用于传递一个父级id，返回该父级下的所有子集的ID
    Static Public function getChildsId($cate,$pid){
        $arr = array();
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $arr[] = $v['id'];
                $arr = array_merge($arr,self::getChildsID($cate,$v['id']));
            }
        }
        return $arr;
    }
    //这个方法适用于传递一个父级id，返回该父级下的所有子集的所有数据
    Static Public function getChilds($cate,$pid){
        $arr = array();
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $arr[] = $v;
                $arr = array_merge($arr,self::getChildsID($cate,$v['id']));
            }
        }
        return $arr;
    }

}
?>