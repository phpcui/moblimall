<?php
namespace Home\Controller;

class FlowController extends \Think\Controller {
    public function buy() {
        $goods = D('Goods');
        if( !$goods->find(I('get.goods_id')) ) {
            $this->redirect('/');
        }

        // 加入购物车
        $cart = \Home\Tool\CartTool::getIns();
        $cart->add($goods->goods_id , $goods->goods_name,$goods->shop_price);
        //print_r( $cart->items() );
        $this->redirect('Home/Flow/checkout');
    }

    public function checkout() {
        $cart = \Home\Tool\CartTool::getIns();
        $this->assign('goods' , $cart->items() );
        $this->assign('money' , $cart->calcMoney() );
        $this->display('flow_checkout');
    }



    public function done() {
        $oi = M('ordinfo');
        $og = M('ordgoods');
        $cart = \Home\Tool\CartTool::getIns();

        // 把POST数据写入ordinfo表
        $oi->ord_sn = $ord_sn =  date('Ymd').mt_rand(1000,9999);
        $oi->user_id = cookie('user_id') ? cookie('user_id') : 0;
        $oi->xm = I('post.xm');
        $oi->mobile = I('post.mobile');
        $oi->address = I('post.address');
        $oi->note = I('post.note');
        $oi->money = $money = $cart->calcMoney();
        $oi->ordtime = time();

        $ordinfo_id = $oi->add();

        $res = true;
        // 把购物车数据写入ordgoods表
        foreach($cart->items() as $k=>$v) {
            $row = array();
            $row['ordinfo_id'] = $ordinfo_id;
            $row['goods_id'] = $k;
            $row['goods_name'] = $v['goods_name'];
            $row['shop_price'] = $v['shop_price'];
            $row['goods_num'] = $v['num'];

            $res = $res && $og->add($row);
        }

        if(!$res) {
            $oi->delete($ordinfo_id);
            $og->where('ordinfo_id='.$ordinfo_id)->delete();
            echo 'fail';
        } else {// 清空购物车
            $cart->clear();
        }
        
        $this->assign('ord_sn' , $ord_sn);
        $this->assign('money' , $money);

        $cbpay = new \Home\Pay\CBPay($ord_sn, $money);
        $this->assign('form' , $cbpay->form());

        $this->display('flow_done');
    }
}