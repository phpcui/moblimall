<?php
namespace Home\Model;
class GoodsModel extends \Think\Model\RelationModel {
    protected $insertFields = 'goods_id,goods_sn,cat_id,brand_id,goods_name,shop_price,market_price,goods_number,click_count,goods_weight,goods_brief,goods_desc,thumb_img,goods_img,ori_img,is_on_sale,is_delete,is_best,is_new,is_hot,add_time';
    
    // 声明$_validate 二维数组,每个数组是一个字段的验证规则
    protected $_validate = array(
        //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]), 
        array('goods_name','3,16','商品名长度在3-16内',1,'length',3),
        array('goods_sn','','商品货号已存在',1,'unique',1),
        array('is_best','0,1','精品只能是0/1',0,'in',3),
        array('cat_id','ckc','栏目不对',0,'callback',3), // callback会调用model自身方法来检测,function调用函数
    );

    protected $_auto = array(
        // array(完成字段1,完成规则,[完成条件,附加规则]),
        array('add_time' , 'time' , 1 , 'function'),
        array('last_update' , 'time' , 2 , 'function'), 
        array('goods_weight' , '0' , 3 , 'string'), 
    );

    protected $_link = array(
        'comment'=>self::HAS_MANY,
    );

    protected function ckc() {
        $cat = D('Home/Cat');
        return $cat->find(I('post.cat_id')) ? true : false;
    }
}