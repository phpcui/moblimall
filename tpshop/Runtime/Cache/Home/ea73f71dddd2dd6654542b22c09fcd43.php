<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="手机网" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>GSM手机_手机类型_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="view/js/common.js"></script>
</head>

<body>
    <div id="header">
        <div class="header_top">
            <div class="header_top_l">
            </div>
            <div class="header_top_m">
                <div style='float:left' id="ECS_MEMBERZONE">
                    欢迎光临本店　　　　
                    <a href="#">
                        会员登录
                    </a>
                    |
                    <a href="#">
                        免费注册
                    </a>
                    <label id="myaccount">
                        <a href="#">
                            我的帐户
                        </a>
                    </label>
                    <label id="helpcenter">
                        <a href="#">
                            帮助中心
                        </a>
                    </label>
                </div>
                <div style='float:right'>
                    <label id="collect">
                        <a href="#">
                            加入收藏
                        </a>
                    </label>
                    <label id="sethome">
                        <a href="#" onclick="SetHome(this,window.location)">
                            设为首页
                        </a>
                    </label>
                </div>
                <div class='clear'>
                </div>
            </div>
            <div class="header_top_r">
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="logo">
            <a href="#">
                <img src="/Public/Home/images/logo.gif">
            </a>
        </div>
        <div class="header_intro">
            <img src="/Public/Home/images/by_top.gif">
        </div>
        <div class="headerdg">
            <em>
                抢购热线（全天24小时）
            </em>
            <p>
                <img src="/Public/Home/images/tel1.gif">
            </p>
        </div>
    </div>
    <div id="nav">
        <div class="nav_m">
            <ul>
                <li>
                    <a href="<?php echo U('/');?>">
                        首页
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Home/Index/cat',array('cat_id'=>3));?>" id="navbg">
                        GSM手机
                    </a>
                </li>
                <li>
                    <a href="#">
                        双模手机
                    </a>
                </li>
                <li>
                    <a href="#">
                        手机配件
                    </a>
                </li>
                <li>
                    <a href="#">
                        留言板
                    </a>
                </li>
            </ul>
        </div>
        <DIV class="navr_recent">
            <SPAN class="navr_recent_l1">
                　
            </SPAN>
            <A onmousedown="bubble(event);" href="#" name="myliulan">
                <a href="#" title="查看购物车">
                    <a href="#" title="查看购物车">
                        您的购物车中有 0 件商品，总计金额 ￥0.00元。
                    </a>
                </a>
            </A>
            <EM>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </EM>
        </DIV>
        <div class="clear">
        </div>
    </div>
    <div class="nav_min_div" id="min_div">
        <img src="/Public/Home/images/top_min.jpg">
    </div>



<div class="position">
    当前位置:
    <span>
        <a href=".">
            首页
        </a>
        <code>
            &gt;
        </code>
        <a href="category.php?id=1">
            手机类型
        </a>
        <code>
            &gt;
        </code>
        <a href="category.php?id=3">
            GSM手机
        </a>
        <code>
            &gt;
        </code>
        诺基亚E66
    </span>
</div>
<div id="detail_body">
    <div class="detail_l">
        <div class="detail_pic">
            <a href="javascript:;" onclick="window.open('gallery.php?id=9'); return false;">
                <img src="/Public/upload/<?php echo ($g["goods_img"]); ?>" alt="诺基亚E66"
                name="goods_img_id" id="goods_img_id" />
            </a>
        </div>

    </div>
    <div class="detail_r">
        <div class="detail_rbt">
            <h1>
                <?php echo ($g["goods_name"]); ?>
            </h1>
            <h2>
            </h2>
        </div>
        <ul class="detail_rul">
            <li style="width: 400px;">
                <b style="color: rgb(195, 20, 0);">
                    商品货号：<?php echo ($g["goods_sn"]); ?>
                </b>
            </li>
            <li>
                商品品牌：
                <a href="brand.php?id=1">
                    诺基亚
                </a>
            </li>
            <li>
                购买此商品可使用：2200 积分
            </li>
            <div class="clear">
            </div>
        </ul>
        <div style="width: 100%; padding-top: 10px;">
            <div style="width: 260px; height: 100px; float: left; margin-top: 15px;">
                <ul style="border-bottom: medium none;">
                    <li style="width: 260px; float: left; margin-right: 10px; margin-top: 5px;">
                        市场价格：：
                        <span style="text-decoration: line-through;">
                            ￥{<?php echo ($g["market_price"]); ?>元
                        </span><br />
                        本店售价：：
                        <span>
                            <font color="red">￥<?php echo ($g["shop_price"]); ?>元</font>
                        </span>
                    </li>
                    <li class="detail_qgl" style="margin-top: 13px;">
                        <span class="gg2">
                        </span>
                        <span class="gg3">
                        </span>
                        <span class="gg5">
                        </span>
                        <span class="gg9">
                        </span>
                        <span class="gg14">
                        </span>
                        <span class="gg15">
                        </span>
                    </li>
                </ul>
            </div>
            <div style="margin-top:30px;"><a href="<?php echo U('Home/Flow/buy' , array('goods_id'=>$g['goods_id']));?>"><img src="/Public/Home/images/member_shop.gif" /></a></div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear detail_body_footer">
        <div style="border: 1px solid rgb(204, 204, 204); background: transparent url(./images/ad/ads03.jpg) repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; width: 885px; height: 71px; color: rgb(102, 102, 102);">
            <ul style="padding-left: 10px;">
                <li style="padding: 5px; line-height: 20px; width: 260px; float: left;">
                    ★ 买机送金
                    <br>
                    为真情回馈广大客户的关注，网站推出清凉七月购机送金活动。开心多多，欢乐多多！
                </li>
                <li style="padding: 5px; line-height: 20px; width: 265px; float: left;">
                    ★ 全场免邮
                    <br>
                    凡在本站购物的每位顾客，都可以享受到免29元邮费的待遇，真正做到网上购物，实惠多多！
                </li>
                <li style="overflow: hidden; width: 330px; float: right; height: 71px;">
                    <img src="/Public/Home/images/ads03.gif">
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="detail_info">
    <div class="detail_info_l">
        <div class="detail_info_l_header">
            <ul>
                <li class="hover" onmouseover="orderView(1);" id="view_1">
                    商品描述：
                </li>
                <li class="" onmouseover="orderView(2);" id="view_2">
                    商品属性
                </li>
            </ul>
        </div>
        <div class="detail_info_l_body">
            <div style="display: block;" class="detailm_content1" id="c1">
                 
            </div>
            <div class="detailm_content2" id="c2" style="display: none;">
                    
            </div>
            </div>
            <div id="ECS_COMMENT">
                <div class="det_review">
                    <form action=""  method="post" name="commentForm" id="commentForm">
                        <strong>
                            评价/提问
                        </strong>
                        <em>
                            已购用户如有售后问题请直接拨打客服专线4007-112-211，以便获得更加及时专业的服务
                        </em>
                        <br>
                        <textarea name="content" class="text_detreview" id="pingjia">
                        </textarea>
                        <input type="hidden" name="cmt_type" value="0" />
                        <input type="hidden" name="id" value="9" />
                        <span class="jo">
                            <input name="comment_rank" value="5" id="comment_rank5" type="hidden">
                        </span>
                        <input name="topictpl" id="topictpl" value="0" type="hidden">
                        <br>
                        <div class="det_review_r">
                            <div class="det_review_rl">
                                <a href="user.php?act=register" target="_blank">
                                    没有用户名，请注册
                                </a>
                            </div>
                            <div class="det_review_rr">
                                <span>
                                    用户名：匿名用户&nbsp; E-mail：
                                    <input name="email" id="email" maxlength="100" value="" class="text_short"
                                    type="text">
                                </span>
                                　
                                <input name="Submit" value="完 成" class="buttonred" type="submit">
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="review">
                    暂时还没有任何用户评论
                </div>

                <?php if(is_array($comms)): foreach($comms as $key=>$c): ?><div class="review">
                    <div class="rev_t">
                        <div class="rev_t_user"><strong>Email：</strong><?php echo ($c["email"]); ?></div>
                        <div class="rev_t_time"><strong>时间：</strong><?php echo (date('Y/m/d H:i',$c["pubtime"])); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="rev_m"><?php echo ($c["content"]); ?></div>
			    </div><?php endforeach; endif; ?>


                <div class="page" style="margin-top:20px;">
                    <div id="pagebar" class="f_r">
                        <form name="selectPageForm" action="/shouji/goods.php" method="get">
                            <div id="pager">
                                总计 0 个记录，共 1 页。
                                <a href="javascript:gotoPage(1,9,0)">
                                    第一页
                                </a>
                                <a href="javascript:;">
                                    上一页
                                </a>
                                <a href="javascript:;">
                                    下一页
                                </a>
                                <a href="javascript:;">
                                    最末页
                                </a>
                            </div>
                        </form>
                        <script type="Text/Javascript" language="JavaScript">
                            function selectPage(sel) {
                                sel.form.submit();
                            }
                        </script>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="detail_info_r">
            <div class="shop">
                <a href="javascript:collect(9)">
                    加入收藏夹
                </a>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    
    <div class="footert">
        <div class="footertl">
            <div class="footert_1">
                <img src="/Public/Home/images/logo21.gif">
            </div>
            <div class="footert_2">
                抢购热线（9:00-18:00）
                <p>
                    <img src="/Public/Home/images/tel2.gif">
                </p>
            </div>
        </div>
        <div class="footertr">
            <div class="footertr_t">
                好趣购是货真价实的网络直销商城，好趣购所售手机全部都是厂家直接供货，没有任何中间批发 和分销环节，让您以最低价格，购买到性价比最高的手机。
            </div>
            <div class="footertr_b">
                <dl class="footertr_d1">
                    <dt>
                    </dt>
                    <dd>
                        会员积分计划
                    </dd>
                </dl>
                <dl>
                    <dt>
                    </dt>
                    <dd>
                        免费订购热线
                    </dd>
                </dl>
                <dl class="footertr_d3">
                    <dt>
                    </dt>
                    <dd>
                        3000城市送货上门
                    </dd>
                </dl>
                <dl class="footertr_d4">
                    <dt>
                    </dt>
                    <dd>
                        品牌厂商直接供货
                    </dd>
                </dl>
                <dl class="footertr_d5">
                    <dt>
                    </dt>
                    <dd>
                        中国人保承保
                    </dd>
                </dl>
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="footer">
        <div class="foottop">
            <dl>
                <dt>
                    新手上路
                </dt>
                <dd>
                    <a href="#" title="售后流程">
                        售后流程
                    </a>
                </dd>
                <dd>
                    <a href="#" title="购物流程">
                        购物流程
                    </a>
                </dd>
                <dd>
                    <a href="#" title="订购方式">
                        订购方式
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    手机常识
                </dt>
                <dd>
                    <a href="#" title="如何分辨原装电池">
                        如何分辨原装电池
                    </a>
                </dd>
                <dd>
                    <a href="#" title="如何分辨水货手机 ">
                        如何分辨水货手机
                    </a>
                </dd>
                <dd>
                    <a href="#" title="如何享受全国联保">
                        如何享受全国联保
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    配送与支付
                </dt>
                <dd>
                    <a href="#" title="货到付款区域">
                        货到付款区域
                    </a>
                </dd>
                <dd>
                    <a href="#" title="配送支付智能查询 ">
                        配送支付智能查询
                    </a>
                </dd>
                <dd>
                    <a href="#" title="支付方式说明">
                        支付方式说明
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    会员中心
                </dt>
                <dd>
                    <a href="#" title="资金管理">
                        资金管理
                    </a>
                </dd>
                <dd>
                    <a href="#" title="我的收藏">
                        我的收藏
                    </a>
                </dd>
                <dd>
                    <a href="#" title="我的订单">
                        我的订单
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    服务保证
                </dt>
                <dd>
                    <a href="#" title="退换货原则">
                        退换货原则
                    </a>
                </dd>
                <dd>
                    <a href="#" title="售后服务保证 ">
                        售后服务保证
                    </a>
                </dd>
                <dd>
                    <a href="#" title="产品质量保证 ">
                        产品质量保证
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    联系我们
                </dt>
                <dd>
                    <a href="#" title="网站故障报告">
                        网站故障报告
                    </a>
                </dd>
                <dd>
                    <a href="#" title="选机咨询 ">
                        选机咨询
                    </a>
                </dd>
                <dd>
                    <a href="#" title="投诉与建议 ">
                        投诉与建议
                    </a>
                </dd>
            </dl>
            <div class="foottop_r" onClick="window.location.href = '#'">
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="footbot">
            <a href="#">
                免责条款
            </a>
            |
            <a href="#">
                隐私保护
            </a>
            |
            <a href="#">
                咨询热点
            </a>
            |
            <a href="#">
                联系我们
            </a>
            |
            <a href="#">
                公司简介
            </a>
            |
            <a href="#">
                批发方案
            </a>
            |
            <a href="#">
                配送方式
            </a>
            <p>
                &copy; 2005-2011 ECSHOP 版权所有，并保留所有权利。
            </p>
            <div class="clear">
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
<script type="text/javascript">


function orderView(id) {
	//alert('未制作');view_1
	var view_1 = $("view_1");
	var view_2 = $("view_2");
	var c1 = $("c1");
	var c2 = $("c2");
	if(id==1)
	{
		view_1.className="hover";
		view_2.className="";
		c1.style.display="block";
		c2.style.display="none";
	}
	else
	{
		view_1.className="";
		view_2.className="hover";
		c1.style.display="none";
		c2.style.display="block";
	}
};

			function img_src(val){
				$("goods_img_id").src=val;
			}
			var boxheight=81;//跟图片的实际尺寸相符
			var box=$("demo");
			var obox=$("demo1");
			var dulbox=$("demo2");
			obox.style.height=obox.getElementsByTagName("li").length*boxheight+'px';
			dulbox.style.height=obox.getElementsByTagName("li").length*boxheight+'px';
			/*box.style.height=obox.getElementsByTagName("li").length*boxheight*3+'px';*/
			var canroll = false;
			if (obox.getElementsByTagName("li").length >= 4) {
			canroll = true;
			dulbox.innerHTML=obox.innerHTML;
			}
			var step=5;temp=1;speed=10;
			var aheight=obox.offsetHeight;
			var mData=0;
			var isStop = 1;
			var dir = 1;
			function s(){
				if (!canroll) return;
					if (dir) {
						if((aheight+mData)>=0){
						mData=mData-step;
						}
						else{
							mData=-step;
						}
					}
					else{
						if(mData>=0){
							mData=-aheight;
						}
						else{
							mData+=step;
						}
					}
					obox.style.marginTop=mData+"px";
					if (isStop) return;
					setTimeout(s,speed)
				}
			function moveLeft() {
				var wasStop = isStop;
				dir = 1;
				speed = 50;
				isStop=0;
				if (wasStop) {
					setTimeout(s,speed);
				}
			}
			function moveRight() {
				var wasStop = isStop;
				dir = 0;
				speed = 50;
				isStop=0;
				if (wasStop) {
					setTimeout(s,speed);
				}
			}
			function scrollStop() {
				isStop=1;
			}
			function clickLeft() {
				var wasStop = isStop;
				dir = 1;
				speed = 25;
				isStop=0;
				if (wasStop) {
					setTimeout(s,speed);
				}
			}
			function clickRight() {
				var wasStop = isStop;
				dir = 0;
				speed = 25;
				isStop=0;
				if (wasStop) {
					setTimeout(s,speed);
				}
			}
		</script>
</body>
</html>