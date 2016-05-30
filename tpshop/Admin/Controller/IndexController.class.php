<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index() {
        $this->display();
    }

    public function test(){
        //print_r(new \Home\Model\CatModel());
        print_r( D('Home/Cat') );
    }
}