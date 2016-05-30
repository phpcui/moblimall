<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="/20150518/shop/web/Public/Home/css/index.css" />
<script type="text/javascript" src="/20150518/shop/web/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/20150518/shop/web/Public/Home/js/xxx.js"></script>
</head>
    <body>
        <h1><?php echo ($title); ?></h1>
        <p><?php echo ($content); ?></p>
        <table border="1">
            <tr>
                <td>cat_id</td>
                <td>cat_name</td>
                <td>intro</td>
            </tr>
            <?php if(is_array($cats)): foreach($cats as $key=>$c): ?><tr>
                <td><a href="<?php echo U('Home/Index/cat' , array('cat_id'=>$c[cat_id]) );?>"><?php echo ($c["cat_id"]); ?></a></td>
                <td><?php echo ($c["cat_name"]); ?></td>
                <td><?php echo ($c["intro"]); ?></td>
            </tr><?php endforeach; endif; ?>
        </table>

        <h2>小华考了<?php echo ($score); ?>分,<?php if($score >= 60): ?>及格<?php else: ?> 不及格<?php endif; ?></h2>


        <select>
            <option <?php echo ($cat == '科技' ? selected : ''); ?>>科技</option>
            <option <?php echo ($cat == '人生' ? selected : ''); ?>>人生</option>
            <option <?php echo ($cat == '哲学' ? selected : ''); ?>>哲学</option>
        </select>
    </body>
</html>