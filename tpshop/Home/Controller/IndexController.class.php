<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // 取热卖商品
        $goods = D('goods');
        $goods->field('goods_id,goods_sn,goods_name,shop_price,goods_brief,thumb_img')->where('is_hot=1');
        $goods->limit(0,3);
        $this->assign('hot' , $goods->select());

        $goods->field('goods_id,goods_sn,goods_name,shop_price,goods_brief,thumb_img')->where('is_best=1');
        $goods->limit(0,3);
        $this->assign('best' , $goods->select());

        $goods->field('goods_id,goods_sn,goods_name,shop_price,goods_brief,thumb_img')->where('is_new=1');
        $goods->limit(0,3);
        $this->assign('new' , $goods->select());

        // 查询栏目
        $cat = D('Home/Cat');
        $this->assign('cats' , $cat->getTree() );

        // 获取最近浏览历史
        $history = array_reverse( session('history') , true);
        $this->assign('history' , $history);

        $this->display('index');
    }

    public function cat(){
        $cat_id = I('get.cat_id');
        $goods = D('goods');

    
        // 分页
        $cnt = $goods->where(array('cat_id'=>$cat_id))->count('*');
        $pager = new \Org\Buer\MyPage($cnt , 6);
        //$pager = new \Think\Page($cnt, 4);
        $this->assign('cnt' , $cnt);
        $this->assign('pages' , $pager->show() );
        

        $goods->where(array('cat_id'=>$cat_id));
        $goods->order('goods_id desc')->limit($pager->firstRow , $pager->listRows);
 /*       print_r($goods->select());
        exit;*/
        $this->assign('goods' , $goods->select() );

        // 查询栏目
        $cat = D('Home/Cat');
        $this->assign('cats' , $cat->getTree() );



        $this->display('category');
    }

    public function goods() {
        $goods = D('Home/Goods');
        $row = $goods->find( I('get.goods_id') );
        if(empty($row)) {
            $this->redirect('Home/Index/index');
        }

        // 判断是否有评论提交
        if(IS_POST) {
            $comm = M('comment');
            $comm->goods_id = I('get.goods_id');
            $comm->pubtime = time();
            $comm->email = I('post.email');
            $comm->content = I('post.content');
            $comm->user_id = cookie('user_id') ? cookie('user_id') : 0;
            $comm->add(); // 当传参数,前面设置的属性,没效果
        }

        // 查询商品的评论
        /*$comm = M('comment');
        $comms = $comm->where('goods_id='.I('get.goods_id'))->select();*/

        $comms = $goods->relationGet('comment');
        $this->assign('comms' , $comms);

        // 把浏览的此商品写入session['history']中
        if( session('?history') ) {
            $history = session('history');
        } else {
            $history = array();
        }

        $goods_id = I('get.goods_id');
        if( isset($history[$goods_id]) ) {
            unset($history[$goods_id]);
        }

        $history[$goods_id]['goods_name'] = $row['goods_name'];
        $history[$goods_id]['shop_price'] = $row['shop_price'];
        $history[$goods_id]['thumb_img'] = $row['thumb_img'];

        if(count($history) > 6) {
            $key = key($history);
            unset($history[$key]);
        }
        session('history' , $history);

        $this->assign('g' , $row);

        $this->display('goods');
    }

    public function test() {
        /*$model = new \Home\Model\GoodsModel();
        print_r($model);*/
        $model = new \Home\Model\CatModel();
        //print_r($model);exit;
        /*// 面向过程风格
        $data = array('cat_name'=>'手机' , 'intro'=>'好手机');
        echo $model->add($data);*/

        /*
        // 面向对象风格
        $model->cat_name = '衣服';
        $model->intro = '纯棉内衣';
        echo $model->add();*/


        //print_r($model->find(2));
        // where group having order limit
        //print_r($model->where('parent_id=0')->select());
        //print_r($model->where('parent_id=0')->field('cat_id,cat_name,parent_id')->limit(0,2)->order('cat_id desc')->select());


        /*
        // 修改数据
        //print_r($model);
        $model->find(2);
        //print_r($model);
        $model->intro = '涤轮';
        echo $model->save();
        */

        //echo $model->delete(2);
        //echo $model->where( array('parent_id'=>0) )->delete();

        /*$title = '今天夏至';
        $this->assign('title' , $title);
        $this->assign('content' , '今天天气开始热了');

        $cats = $model->select(); // select * from cat;
        $this->assign('cats' , $cats);

        $this->assign('score' , rand(20,100) );
        $this->assign('cat' , '人生');
        
        echo C('URL_PATHINFO_DEPR') , '<br />';
        echo U('Home/Index/cat' , array('page'=>3 , 'price'=>300)) , '<br />';
        C('URL_PATHINFO_DEPR' , '-');
        echo U('Home/Index/cat' , array('page'=>3 , 'price'=>300)) , '<br />';

        echo $_GET['name'] , '~' , I('get.name') , '<br />';
        echo $_POST['email'] , '~' , I('post.name');


        $this->display();*/

        
        //print_r(M('cat'));
        //print_r(D('cat'));
        //print_r(new \Home\Pay\AliPay());
        //print_r( D('Ali' , 'Pay') );
        /*
        $cart = \Home\Tool\CartTool::getIns();
        
        if(I('get.act') == 'buy') {
            $cart->add(3,'nokia' , 29.9);
            $cart->add(3,'nokia' , 29.9);
            $cart->add(3,'nokia' , 29.9);
            $cart->add(5,'sanxing' , 99.8);
            $cart->add(7,'HTC' , 3.4);
            $cart->decr(3);
        }

        print_r( $cart->items() );*/



        $cbpay = new \Home\Pay\CBPay('201506261478' , 99.87);
        echo $cbpay->form();
    }
}