<?php /* Smarty version Smarty-3.1.6, created on 2016-05-01 00:57:12
         compiled from "D:/2016XT/test02/shop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1368572066345ee287-32350522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f4c48c3111257dbcbbc3ce43e08ca2dc39951e' => 
    array (
      0 => 'D:/2016XT/test02/shop/Home/View\\Index\\index.html',
      1 => 1462035425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1368572066345ee287-32350522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57206634d0e61',
  'variables' => 
  array (
    'username' => 0,
    'login' => 0,
    'register' => 0,
    'userinfo' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57206634d0e61')) {function content_57206634d0e61($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="YONGDA商城" />
        <meta name="Description" content="YONGDA商城" />
        
        <title>YONGDA商城 - Powered by YongDa</title>
        
        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
          
    </head>
    <body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="<?php echo @IMG_URL;?>
logo.gif"></a>

            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE">
                        <div id="append_parent"></div>
                        <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&nbsp;
                        <a href="<?php echo @__MODULE__;?>
/User/login" style='visibility:<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
;'>登陆</a>
                        <a href="<?php echo @__MODULE__;?>
/User/register" style='visibility:<?php echo $_smarty_tpl->tpl_vars['register']->value;?>
;'>注册</a>
                        <a href="<?php echo @__MODULE__;?>
/Userinfo/showinfo" style='visibility:<?php echo $_smarty_tpl->tpl_vars['userinfo']->value;?>
;'>用户中心</a>
                        <a href="<?php echo @__MODULE__;?>
/Index/layout" style='visibility:<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
;' onclick=' if( confirm("确定要退出吗？") ) return true; else return false;'><span style='color:red;'>退出<span></a>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="#">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>
                </div>
            </div>
            <div id="mainNav" class="clearfix">
                <a href="#" class="cur">首页<span></span></a>
                <a href="#">GSM手机<span></span></a>
                <a href="#">双模手机<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>
            </div>
        </div>

        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('<?php echo @IMG_URL;?>
sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>
        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo @IMG_URL;?>
biao6.gif" />
                    <!-- 北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b> -->
            </div>
            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao3.gif">
                    <span class="cart" id="ECS_CARTINFO">
                        <a href="#" title="查看购物车">您的购物车中有 0 件商品，总计金额 ￥0.00元。</a></span>
                    <a href="#"><img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao7.gif"></a>

            </div>
        </div>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
        <div class="block box">

        <div class="block clearfix">

            <div class="AreaL">

                <h3><span>商品分类</span></h3> 
                <div id="category_tree" class="box_1">
                    <dl>
                        <dt><a href="#">A类产品</a></dt>
                        <dd>     
                            <a href="#">CDMA手机</a>
                            <a href="#">GSM手机</a>
                            <a href="#">3G手机</a>
                            <a href="#">双模手机</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">B类产品</a></dt>
                        <dd>     
                            <a href="#">充电器</a>
                            <a href="#">耳机</a>
                            <a href="#">电池</a>
                            <a href="#">读卡器和内存卡</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">C类产品</a></dt>
                        <dd>     
                            <a href="#">小灵通/固话充值卡</a>
                            <a href="#">移动手机充值卡</a>
                            <a href="#">联通手机充值卡</a>
                        </dd>
                    </dl>

                </div>
                
            </div>

            <div class="AreaM">
                
               

                <div class="itemTit" id="itemHot">
                    <div class="tit">A类商品</div>
                </div>
                <div id="show_hot_area" class="clearfix">
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="诺基亚E66">诺基亚E66</a></p>
                        <font class="market">￥2758元</font><br />
                        <font class="f1">
                            ￥2298元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="KD876">KD876</a></p>
                        <font class="market">￥1666元</font><br />
                        <font class="f1">
                            ￥1388元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>
                     <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>


                </div>
            
                <div class="itemTit" id="itemNew">
                    <div class="tit">B类商品</div>
                </div>
                <div id="show_new_area" class="clearfix">
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="诺基亚E66">诺基亚E66</a></p>
                        <font class="market">￥2758元</font><br />
                        <font class="f1">
                            ￥2298元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="KD876">KD876</a></p>
                        <font class="market">￥1666元</font><br />
                        <font class="f1">
                            ￥1388元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>
                     <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>
                </div>


                 <div class="itemTit" id="itemNew">
                    <div class="tit">C类商品</div>
                </div>
                <div id="show_new_area" class="clearfix">
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="诺基亚E66">诺基亚E66</a></p>
                        <font class="market">￥2758元</font><br />
                        <font class="f1">
                            ￥2298元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="KD876">KD876</a></p>
                        <font class="market">￥1666元</font><br />
                        <font class="f1">
                            ￥1388元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>
                     <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>
                </div>
           
        </div>
        </div>
       
    </body>
</html><?php }} ?>