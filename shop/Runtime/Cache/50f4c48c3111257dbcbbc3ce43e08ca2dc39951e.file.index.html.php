<?php /* Smarty version Smarty-3.1.6, created on 2016-05-04 21:00:44
         compiled from "D:/2016XT/test02/shop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1368572066345ee287-32350522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f4c48c3111257dbcbbc3ce43e08ca2dc39951e' => 
    array (
      0 => 'D:/2016XT/test02/shop/Home/View\\Index\\index.html',
      1 => 1462366833,
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
    'Category' => 0,
    'v' => 0,
    'val' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57206634d0e61')) {function content_57206634d0e61($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 " />
        <meta name="Keywords" content="YONGDA商城" />
        <meta name="Description" content="YONGDA商城" />
        
        <title>YONGDA商城 - Powered by YongDa</title>
        
        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
          
    </head>
    <body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="<?php echo @IMG_URL;?>
360logo.png"></a>

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
                <a href="<?php echo @__CONTROLLER__;?>
/index" class="cur">首页<span></span></a>
                <a href="<?php echo @__MODULE__;?>
/Userinfo/showinfo">个人中心<span></span></a>
                <a href="<?php echo @__MODULE__;?>
/Car/showcar">购物车<span></span></a>
                
            </div>
        </div>

        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

        </div>
        <div class="blank5"></div>
        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo @IMG_URL;?>
biao6.gif" />
                    大学城地区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>
        </div>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
            当前位置: <span>首页</span>
            </div>
        </div>
        <div class="blank"></div>
        <div class="block box">

        <div class="block clearfix">

            <div class="AreaL">
            <h3><span>商品分类</span><a href='<?php echo @__CONTROLLER__;?>
/index'>显示全部商品</a></h3> 
                <div id="category_tree" class="box_1">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <dl>
                        <dt><a href="<?php echo @__CONTROLLER__;?>
/index?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></dt>       
                                    <dd>     
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                                            <a href="<?php echo @__CONTROLLER__;?>
/index?pid=<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</a>
                                        <?php } ?>
                                    </dd>                             
                    </dl>
                <?php } ?>
                </div>
                
            </div>

            <div class="AreaM">
                
               

               <!--  <div class="itemTit" id="itemHot">
                    <div class="tit">A类商品</div>
                </div> -->
            
                <div id="show_hot_area " class="clearfix ">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="goodsItem hezi">
                        <a href="#"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" class='f1'><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></p>
                        <font align='left'>商品库存量：<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</font><br />
                        <font class="f1"> ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元</font>
                        <p><a href='<?php echo @__CONTROLLER__;?>
/joincat?goods_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
' class='f1' id='joincar'>加入购物车</a></p>
                    </div>
                <?php } ?>
                </div>
                <p style='text-align: center;margin-top:5px;'><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</p>
         
        </div>
        </div>
      


<div id="mod-footer">
		<div id="foot-bannerw">
			<div class="bannerThree">
				<div class="yuan">7</div>
				<p>7天无理由退货</p>
			</div>
			<div class="bannerThree">
				<div class="yuan">15</div>
				<p>15天免费换货</p>
			</div>
			<div class="bannerThree">
				<div class="yuan">包</div>
				<p>满99元包邮</p>
			</div>
		</div>
		<div id="foot-containerw">
			<div id="lside">
				<div class="five">
					<dl>
						<dt>新手入门</dt>
						<dd><a href="#">新用户注册</a></dd>
						<dd><a href="#">用户登录</a></dd>
						<dd><a href="#">找回密码</a></dd>
					</dl>
				</div>
				<div class="five">
					<dl>
						<dt>购物指南</dt>
						<dd><a href="#">购物流程</a></dd>
						<dd><a href="#">支付方式</a></dd>
						<dd><a href="#">配送说明</a></dd>
					</dl>
				</div>
				<div class="five">
					<dl>
						<dt>售后服务</dt>
						<dd><a href="#">服务条款</a></dd>
						<dd><a href="#">七日退货</a></dd>
						<dd><a href="#">十五日换货</a></dd>
					</dl>
				</div>
				<div class="five">
					<dl>
						<dt>免费试用</dt>
						<dd><a href="#">试用流程</a></dd>
						<dd><a href="#">查看申请结果</a></dd>
						<dd><a href="#">提交报告</a></dd>
					</dl>
				</div>
				<div class="five">
					<dl>
						<dt>推广合作</dt>
						<dd><a href="#">厂商合作</a></dd>
						<dd><a href="#">商品入驻</a></dd>
						<dd><a href="#">企业采购</a></dd>
						<dd><a href="#">360生态链</a></dd>
					</dl>
				</div>
			</div>
			<div id="rside">
				<dl>
					<dt>联系我们</dt>
					<dd><p class="call-number">400-6822-360</p></dd>
					<dd>周一到周日 8:00-22:00</dd>
					<dd>(仅收市话费)</dd>
					<dd>
						<a href="#">
							<img src="<?php echo @IMG_URL;?>
serveronline.png" alt="">
						</a>
						<a href="#">
							<img src="<?php echo @IMG_URL;?>
WeChat.png" alt="">
						</a>
						<a href="#">
							<img src="<?php echo @IMG_URL;?>
webo.png" alt="">
						</a>
					</dd>
				</dl>
			</div>
		</div>
		<div id="footer-copyright">
			360商城©2013-2016 360公司版权所有 京ICP备08010314号-43 京公网安备11000002000006号
		</div>
	</div>


    </body>
</html><?php }} ?>