<?php /* Smarty version Smarty-3.1.6, created on 2016-05-04 21:58:14
         compiled from "D:/2016XT/test02/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:127857206e5135c858-12910846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9655167e110a3cfc2d993487b911e8d1e0d786a7' => 
    array (
      0 => 'D:/2016XT/test02/shop/Home/View\\User\\login.html',
      1 => 1462370289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127857206e5135c858-12910846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57206e51669c5',
  'variables' => 
  array (
    'errorInfo' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57206e51669c5')) {function content_57206e51669c5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />

        <title>用户中心_YONGDA商城 - Powered by YongDa</title>

        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top">
                <img class="logo" src="<?php echo @IMG_URL;?>
360logo.png">
            </a>


            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                        &nbsp;
                        <a href="<?php echo @__MODULE__;?>
/User/login"> 登录</a>
                        <a href="<?php echo @__MODULE__;?>
/User/register">注册</a>
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
                 <a href="<?php echo @__MODULE__;?>
/Index/index" >首页<span></span></a>
                 <a href="<?php echo @__MODULE__;?>
/Userinfo/showinfo" >个人中心<span></span></a>
                 <a href="<?php echo @__MODULE__;?>
/Car/showcar" >购物车<span></span></a>
                 <a href="<?php echo @__MODULE__;?>
/User/login" class="cur">登录<span></span></a>
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
biao6.gif">
                    北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>
        </div>

        <div class="block block1">
            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here">
                    当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
                </div>
            </div>
            <div class="blank"></div>

            <div class="block box">

            <div class="usBox clearfix">
                <div class="usBox_1 f_l">
                    <div class="logtitle"></div>



                    <form name="formLogin" action="<?php echo @__SELF__;?>
" method="post">
                    
                        <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
                            <tbody><tr>
                                    <td align="right" width="15%">用户名</td>
                                    <td width="85%"><input name="username" size="20" class="inputBg" type="text" />
                                    <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['username'];?>
</span>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td align="right">密码</td>
                                    <td>
                                        <input name="password" size="15" class="inputBg" type="password" />
                                        <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['password'];?>
</span>
                                    </td>
                                    
                                </tr>
                                 <tr>
                                    <td align="right">验证码</td>
                                    <td>
                                        <input name="captcha" size="15" class="inputBg" type="text" />
                                        <img src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg?'+Math.random()" alt='验证码'>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <!-- <td colspan="2"><input value="1" name="remember" id="remember" type="checkbox" />
                                        <label for="remember">请保存我这次的登录信息。</label></td> -->
                                        <td width='50px'>
                                        </td>
                                        <td><span style='color:red;'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></td>
                                            
                        
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="left">
                                        <input name="act" value="act_login" type="hidden" />
                                        <input name="back_act" value="./index.php" type="hidden" />
                                        <input name="submit" value="" class="us_Submit" type="submit" />
                                    </td>
                                </tr>
                                <tr><td></td><td><a href="#" class="f3">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;<a href="#" class="f3">注册邮件找回密码</a></td></tr>
                            </tbody></table>
                    </form>
                    <div class="blank"></div>
                </div>
                <div class="usTxt">
                    <div class="regtitle"></div>
                    <div style="padding-left: 50px;">
                        <strong>如果您不是会员，请注册</strong>  <br />
                        <strong class="f4">友情提示：</strong><br />
                        不注册为会员也可在本店购买商品<br />
                        但注册之后您可以：<br />
                        1. 保存您的个人资料<br />
                        2. 收藏您关注的商品<br />
                        3. 享受会员积分制度<br />
                        4. 订阅本店商品信息  <br />
                        <a href="<?php echo @__MODULE__;?>
/User/register"><img src="<?php echo @IMG_URL;?>
bnt_ur_reg.gif"></a>
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