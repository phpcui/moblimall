<?php
namespace Admin\Controller;

class CatController extends \Think\Controller {
    protected $model = null;

    public function __construct() {
        parent::__construct();
        $this->model = D('Home/Cat');
    }

    public function add() {
        if(!IS_POST) {
            $cat = D('Home/Cat');
            $this->assign('cats' , $cat->getTree() );

            $this->display('cateadd');
        } else {
            $cat = D('Home/Cat');
            echo $cat->add($_POST) ? 'OK' : 'fail';
        }
    }
    
    public function lists() {
        $this->assign('cats' , $this->model->getTree());
        $this->display('catelist');
    }


    public function test() {
        $cat = D('Home/Cat');
        print_r($cat->getTree());
    }
}