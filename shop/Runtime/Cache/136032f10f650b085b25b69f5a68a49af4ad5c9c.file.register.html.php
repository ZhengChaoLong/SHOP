<?php /* Smarty version Smarty-3.1.6, created on 2016-05-04 21:01:47
         compiled from "D:/2016XT/test02/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:171355720706f6aa510-70835384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136032f10f650b085b25b69f5a68a49af4ad5c9c' => 
    array (
      0 => 'D:/2016XT/test02/shop/Home/View\\User\\register.html',
      1 => 1462366897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171355720706f6aa510-70835384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5720706fbb368',
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5720706fbb368')) {function content_5720706fbb368($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <a href="#" name="top">
            <img class="logo" src="<?php echo @IMG_URL;?>
360logo.png"></a>

        <div id="topNav" class="clearfix">
            <div style="float: left;"> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                    欢迎光临本店&nbsp;
                    <a href="<?php echo @__MODULE__;?>
/User/login">登录</a>
                    <a href="<?php echo @__MODULE__;?>
/User/register">注册</a></font> 
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
/Index/index" >
                首页
                <span></span>
            </a>
            <a href="<?php echo @__MODULE__;?>
/Userinfo/showinfo" >
                个人中心
                <span></span>
            </a>
            <a href="<?php echo @__MODULE__;?>
/Car/showcar" >
                购物车
                <span></span>
            </a>
            <a href="<?php echo @__MODULE__;?>
/User/register" class="cur">
                注册
                <span></span>
            </a>
        </div>
    </div>

    <div class="header_bg">
        <div style="float: left; font-size: 14px; color:white; padding-left: 15px;"></div>
    </div>
    <div class="blank5"></div>
    <div class="header_bg_b">
        <div class="f_l" style="padding-left: 10px;">
            <img src="<?php echo @IMG_URL;?>
biao6.gif" />
            北京市区，现在下单(截至次日00:30已出库)， <b>明天上午(9-14点)</b>
            送达 <b>免运费火热进行中！</b>

        </div>

    </div>

    <div class="block block1">

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置:
                <a href="#">首页</a>
                <code>&gt;</code>
                用户注册
            </div>
        </div>
        <div class="blank"></div>

        <!--放入view具体内容-->

        <div class="block box">

            <div class="usBox">
                <div class="usBox_2 clearfix">
                    <div class="logtitle3"></div>

                    <form id="yw0" action="<?php echo @__SELF__;?>
" method="post">
                        <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                            <tbody>
                                <tr>
                                    <td style="width:13%; text-align: right;">
                                        <label for="User_username" class="required">
                                            用户名
                                            <span class="required">*</span>
                                        </label>
                                    </td>

                                    <td style="width:87%;">
                                        <input class="inputBg" size="25" name="username" id="User_username" type="text" value="" />
                                        <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['username'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        <label for="User_password" class="required">
                                            密码
                                            <span class="required">*</span>
                                        </label>
                                    </td>

                                    <td>
                                        <input class="inputBg" size="25" name="password" id="User_password" type="password" value="" />
                                        <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['password'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        <label for="password2">密码确认</label>
                                        <span class="required">*</span>
                                    </label>
                                </td>
                                <td>
                                    <input class="inputBg" size="25" name="password2" id="User_password2" type="password" />
                                    <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['password2'];?>
</span>
                                </td>
                            </td>

                        </tr>
                        <tr>
                            <td align="right">
                                <label for="user_email">邮箱</label>
                                <span class="required">*</span>
                            </label>
                            <td>
                                <input class="inputBg" size="25" name="user_email" id="User_user_email" type="text" value="" />
                                <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_email'];?>
</span>
                            </td>
                        </td>
                    </tr>
                    <tr>

                        <td align="right">
                            <label for="user_qq">qq号码</label>
                            <td>
                                <input class="inputBg" size="25" name="user_qq" id="user_qq" type="text" value="" />
                                <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_qq'];?>
</span>
                            </td>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="user_tel">手机</label>

                            <td>
                                <input class="inputBg" size="25" name="user_tel" id="user_tel" type="text" value="" />
                                <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_tel'];?>
</span>
                            </td>
                        </td>
                    </tr>
                    <tr>
                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                        <td align="right">
                            <label for="user_sex">性别</label>
                        </td>
                        <td>
                            <input id="ytUser_user_sex" type="hidden" value="" name="user_sex" />
                            <span id="User_user_sex">
                                <input id="User_user_sex_0" value="1" checked="checked" type="radio" name="user_sex" />
                                <label for="User_user_sex_0">男</label>
                                &nbsp;
                                <input id="User_user_sex_1" value="2" type="radio" name="user_sex" />
                                <label for="User_user_sex_1">女</label>
                                &nbsp;
                                <input id="User_user_sex_2" value="3" type="radio" name="user_sex" />
                                <label for="User_user_sex_2">保密</label>
                            </span>

                        </td>
                    </tr>
                    <tr>
                        <!--dropDownList($model,$attribute,$data,$htmlOptions=array())-->
                        <td align="right">
                            <label for="user_xueli">学历</label>
                        </td>
                        <td>
                            <select name="user_xueli" id="user_xueli">
                                <option value="1" selected="selected">-请选择-</option>
                                <option value="2">小学</option>

                                <option value="3">初中</option>
                                <option value="4">高中</option>
                                <option value="5">大学</option>
                            </select>
                            <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_xueli'];?>
</span>
                        </td>
                    </td>
                </tr>
                <tr>
                    <!--checkBoxList($model,$attribute,$data,$htmlOptions=array())-->
                    <td align="right">
                        <label for="User_user_hobby">爱好</label>
                    </td>

                    <td>
                        <input id="ytUser_user_hobby" type="hidden" value="" name="user_hobby" />
                        <span id="User_user_hobby">
                            <input id="User_user_hobby_0" value="1" type="checkbox" name="user_hobby[]" />
                            <label for="User_user_hobby_0">篮球</label>
                            &nbsp;
                            <input id="User_user_hobby_1" value="2" type="checkbox" name="user_hobby[]" />
                            <label for="User_user_hobby_1">足球</label>
                            &nbsp;
                            <input id="User_user_hobby_2" value="3" type="checkbox" name="user_hobby[]" />
                            <label for="User_user_hobby_2">排球</label>
                            &nbsp;
                            <input id="User_user_hobby_3" value="4" type="checkbox" name="user_hobby[]" />
                            <label for="User_user_hobby_3">棒球</label>
                        </span>
                        <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_hobby'];?>
</span>
                    </td>
                </td>
            </tr>
            <tr>

                <!--textArea($model,$attribute,$htmlOptions=array())-->
                <td align="right">
                    <label for="User_user_introduce">简介</label>
                </td>
                <td>
                    <textarea cols="50" rows="5" name="user_introduce" id="user_introduce"></textarea>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>

                <td align="left">
                    <input name="Submit" value="" class="us_Submit_reg" type="submit" />
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
        </tbody>
    </table>

</form>

</div>
</div>
</div>
<!--放入view具体内容-->

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
        <dd>
            <a href="#">新用户注册</a>
        </dd>
        <dd>
            <a href="#">用户登录</a>
        </dd>
        <dd>
            <a href="#">找回密码</a>
        </dd>
    </dl>
</div>
<div class="five">
    <dl>
        <dt>购物指南</dt>
        <dd>
            <a href="#">购物流程</a>
        </dd>
        <dd>
            <a href="#">支付方式</a>
        </dd>
        <dd>
            <a href="#">配送说明</a>
        </dd>
    </dl>
</div>
<div class="five">
    <dl>
        <dt>售后服务</dt>
        <dd>
            <a href="#">服务条款</a>
        </dd>
        <dd>
            <a href="#">七日退货</a>
        </dd>
        <dd>
            <a href="#">十五日换货</a>
        </dd>
    </dl>
</div>
<div class="five">
    <dl>
        <dt>免费试用</dt>
        <dd>
            <a href="#">试用流程</a>
        </dd>
        <dd>
            <a href="#">查看申请结果</a>
        </dd>
        <dd>
            <a href="#">提交报告</a>
        </dd>
    </dl>
</div>
<div class="five">
    <dl>
        <dt>推广合作</dt>
        <dd>
            <a href="#">厂商合作</a>
        </dd>
        <dd>
            <a href="#">商品入驻</a>
        </dd>
        <dd>
            <a href="#">企业采购</a>
        </dd>
        <dd>
            <a href="#">360生态链</a>
        </dd>
    </dl>
</div>
</div>
<div id="rside">
<dl>
    <dt>联系我们</dt>
    <dd>
        <p class="call-number">400-6822-360</p>
    </dd>
    <dd>周一到周日 8:00-22:00</dd>
    <dd>(仅收市话费)</dd>
    <dd>
        <a href="#">
            <img src="<?php echo @IMG_URL;?>
serveronline.png" alt=""></a>
        <a href="#">
            <img src="<?php echo @IMG_URL;?>
WeChat.png" alt=""></a>
        <a href="#">
            <img src="<?php echo @IMG_URL;?>
webo.png" alt=""></a>
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