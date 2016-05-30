<?php
namespace Home\Model;
use \Think\Model;

class CatModel extends Model {
    protected $cats = array();

    public function __construct() {
        parent::__construct();
        $this->cats = $this->select();
    }

    public function getTree($parent_id=0 , $lev=1) {
        $tree = array();
        foreach($this->cats as $k=>$v) {
            if( $v['parent_id'] ==  $parent_id ) {
                $v['lev'] = $lev;
                $tree[] = $v;

                $tree = array_merge( $tree , $this->getTree($v['cat_id'] , $lev+1) );
            }
        }

        return $tree;
    }
}