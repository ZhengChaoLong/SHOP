<?php /* Smarty version Smarty-3.1.6, created on 2016-05-04 21:00:45
         compiled from "D:/2016XT/test02/shop/Home/View\Car\showcar.html" */ ?>
<?php /*%%SmartyHeaderCode:1420257259135a18af8-89147429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b37436059697f121758a53af79eb11fef881fc' => 
    array (
      0 => 'D:/2016XT/test02/shop/Home/View\\Car\\showcar.html',
      1 => 1462366826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420257259135a18af8-89147429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57259135cf3ef',
  'variables' => 
  array (
    'username' => 0,
    'login' => 0,
    'register' => 0,
    'userinfo' => 0,
    'layout' => 0,
    'info' => 0,
    'val' => 0,
    'pagelist' => 0,
    'sumMoney' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57259135cf3ef')) {function content_57259135cf3ef($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="Generator" content="YONGDA v1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />

    <title>用户中心_YONGDA商城 - Powered by YongDa</title>

    <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
            table {
                border:1px solid #dddddd; 
                border-collapse: collapse; 
                width:100%; margin:auto;
            }
            td {
                border:1px solid #dddddd;
            }
            #consignee_addr {
                width:450px;
            }
            .control{
                text-align: center;
                width: 50px;
                height: 20px;
                line-height: 20px;
                padding: 0 3px; 
            }
            
        </style>

</head>
<body>
    <div class="block clearfix" style="position: relative; height: 98px;">
        <a href="#" name="top">
            <img class="logo" alt="" src="<?php echo @IMG_URL;?>
360logo.png" />
        </a>
        <div id="topNav" class="clearfix">
            <div style="float: left;"> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
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
;' onclick=' if( confirm("确定要退出吗？") ) return true; else return false;'>
                        <span style='color:red;'>
                            退出
                            <span></a></font> 
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
                      <a href="<?php echo @__MODULE__;?>
/Index/index" >首页<span></span></a>
                      <a href="<?php echo @__MODULE__;?>
/Userinfo/showinfo" >个人中心<span></span></a>
                      <a href="<?php echo @__MODULE__;?>
/Car/showcar" class="cur">购物车<span></span></a>
                </div>
            </div>

            <div class="header_bg">
                <div style="float: left; font-size: 14px; color:white; padding-left: 15px;"></div>

            </div>
            <div class="blank5"></div>

            <div class="header_bg_b">
                <div class="f_l" style="padding-left: 10px;">
                    <img src="<?php echo @IMG_URL;?>
biao6.gif" alt="" />
                    北京市区，现在下单(截至次日00:30已出库)， <b>明天上午(9-14点)</b>
                    送达 <b>免运费火热进行中！</b>
                </div>
                
            </div>

            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here">
                    当前位置:
                    <a href="#">首页</a>
                    <code>&gt;</code>
                    用户中心
                </div>
            </div>

            <div class="blank"></div>
            <div class="blank"></div>

            <div class="block clearfix">
                <div class="AreaL">
                    <div class="box">
                        <div class="box_1">
                            <div class="userCenterBox">
                                <div class="userMenu">

                                    <a href="#">
                                        <img src="<?php echo @IMG_URL;?>
u2.gif" alt="" />
                                        用户信息
                                    </a>
                                    <a href="#" class="curs">
                                        <img src="<?php echo @IMG_URL;?>
u3.gif" alt="" />
                                        我的购物车
                                    </a>

                                    <a onclick='if (confirm("确定要退出？")) return true;else return false;' href="<?php echo @__MODULE__;?>
/Index/layout" style="background: none repeat scroll 0% 0% transparent; text-align: right; margin-right: 10px;">
                                        <img src="<?php echo @IMG_URL;?>
bnt_sign.gif" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="AreaR">
                    <div class="box">
                        <div class="box_1">
                            <div class="userCenterBox boxCenterList clearfix" style="">
                                <h5>
                                    <span>我的购物车</span>
                                </h5>
                                <div class="blank"></div>
                                <table cellpadding="5" cellspacing="1">
                                    <tbody>
                                        <tr align="center">

                                            <td>商品名字</td>

                                            <td>单价</td>
                                            <td>购买数量</td>
                                            <td>小计</td>
                                            <td>操作</td>
                                        </tr>
                       <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                        <tr>

                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['goods_name'];?>
</td>

                                            <td align="center">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_price'];?>
</td>
                                            <td align="center">
                   <span>
                        <a href='<?php echo @__CONTROLLER__;?>
/subnumber?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_id'];?>
' class='num'>-</a>
                          <input type='text' class='control' value='<?php echo $_smarty_tpl->tpl_vars['val']->value['number'];?>
'></input>
                        <a href='<?php echo @__CONTROLLER__;?>
/addnumber?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_id'];?>
' class='num'>+</a>
                    </span>
                                        </td>
                                        <td align="center">
                                            <span style='color:#FF3334;;font-weight: blod;'>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['money'];?>
</span>
                                        </td>
                                        <td align="center"> <font class="f6"><a href="<?php echo @__CONTROLLER__;?>
/cancel?cid=<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_id'];?>
" >取消购买</a></font> 
                                        </td>
                                    </tr>
                     <?php } ?>
                                </tbody>
                            </table>
                            <div class="blank5"></div>
                            <div style='text-align: center;font-size: 14px;'><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</div>
                            <form action="/user.php" method="get">

                                <div id="pager" class="pagebar">
                                    <span class="f_l " style="margin-right: 10px;">
                                        总计
                                        <b><?php echo $_smarty_tpl->tpl_vars['sumMoney']->value;?>
</b>
                                        元
                                    </span>

                                </div>
                            </form>

                        </div>
                    </div>
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






</div>





</body>
   

    </html><?php }} ?>