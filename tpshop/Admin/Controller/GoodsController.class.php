<?php
namespace Admin\Controller;

use \Think\Controller;
class GoodsController extends Controller {
    protected $model = null;
    
    public function __construct() {
        parent::__construct();
        $this->model = D('Home/Goods');
    }

    public function add() {
        if(!IS_POST) {
            $cat = D('Home/Cat');
            $this->assign('cats' , $cat->getTree() );
            $this->display('goodsadd');
        } else {
            //echo $this->model->add($_POST) ? 'OK' : 'fail';   
            if( !$this->model->create() ) { // 创建数据对象, 会自动把$_POST存于data属性上,且自动验证
                echo $this->model->getError();
            } else {
                $upload = new \Think\Upload();
                $upload->rootPath = APP_PATH . 'Public/upload/';
                $upload->savePath = 'img/';
                if($res = $upload->upload() ) {
                    $this->model->ori_img = $res['goods_img']['savepath'] . $res['goods_img']['savename'];
                    $this->model->goods_img = $this->model->ori_img.'X230.jpg';
                    $this->model->thumb_img = $this->model->ori_img.'X100.jpg';

                    $img = new \Think\Image();
                    $img->open($upload->rootPath.$this->model->ori_img);
                    //生成一个缩放后填充大小230*230的缩略图并保存
                    $img->thumb(230, 230,\Think\Image::IMAGE_THUMB_FILLED)->save($upload->rootPath . $this->model->goods_img);
                    $img->thumb(100, 100,\Think\Image::IMAGE_THUMB_FILLED)->save($upload->rootPath.$this->model->thumb_img);
                }
                echo $this->model->add() ? 'OK' : 'fail';
            }
        }
    }

    public function lists() {
        $cnt = $this->model->count('*');
        //$pager = new \Think\Page($cnt,2);
        $pager = new \Org\Buer\MyPage($cnt,10);
        $this->assign('pages' , $pager->show() );
        
        $this->model->field('goods_id,goods_name,goods_sn,shop_price')->order('goods_id desc');
        $this->model->limit($pager->firstRow , $pager->listRows);
        
        $this->assign('goods' , $this->model->select());
        $this->display('goodslist');
    }

    public function del() {
        $this->model->delete( I('get.goods_id') );
        $this->redirect('Admin/Goods/lists');
    }
}