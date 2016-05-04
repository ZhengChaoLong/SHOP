<?php /* Smarty version Smarty-3.1.6, created on 2016-05-03 22:56:01
         compiled from "D:/2016XT/test02/shop/Home/View\Userinfo\showinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:277185724e469291cb3-67822906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90660abd9e2ba060d51c615ad5e95b91492fd286' => 
    array (
      0 => 'D:/2016XT/test02/shop/Home/View\\Userinfo\\showinfo.html',
      1 => 1462287150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277185724e469291cb3-67822906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5724e4695d5c7',
  'variables' => 
  array (
    'username' => 0,
    'login' => 0,
    'register' => 0,
    'userinfo' => 0,
    'layout' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5724e4695d5c7')) {function content_5724e4695d5c7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                width:100%; 
                margin:auto; 
            }
            td { 
                border:1px solid #dddddd;
            }
            td a{
                cursor: pointer;
            }
            #consignee_addr { 
                width:450px; 
            }
        </style>
        
    </head>
    <body>
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" alt="" src="<?php echo @IMG_URL;?>
logo.gif" /></a>
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
                <a href="<?php echo @__MODULE__;?>
/Index/index" >首页<span></span></a>
                <a href="<?php echo @__MODULE__;?>
/Userinfo/showinfo" class="cur">个人中心<span></span></a>
                <a href="<?php echo @__MODULE__;?>
/Car/showcar">购物车<span></span></a>
               
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
biao6.gif" alt="" />
                北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>
            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao3.gif" alt="" />
                <span class="cart" id="ECS_CARTINFO">
                    <a href="#" title="查看购物车">您的购物车中有 1 件商品，总计金额 ￥2000.00元。</a></span>
                <a href="#"><img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao7.gif" alt="" /></a>
            </div>
        </div>

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
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
                                
                                <a href="<?php echo @__SELF__;?>
" class="curs"><img src="<?php echo @IMG_URL;?>
u2.gif" /> 用户信息</a>
                                <a href="<?php echo @__MODULE__;?>
/Car/showcar"><img src="<?php echo @IMG_URL;?>
u3.gif" alt="" /> 我的购物车</a>
                                
                                <a href="#" style="background: none repeat scroll 0% 0% transparent; text-align: right; margin-right: 10px;"><img src="<?php echo @IMG_URL;?>
bnt_sign.gif" alt="" /></a>
                            </div>      </div>
                    </div>
                </div>
            </div>

            <div class="AreaR">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox boxCenterList clearfix" style="">
                            <h5><span>我的个人中心</span></h5>
                            <div class="blank"></div>
                            <form method="post" action='<?php echo @__CONTROLLER__;?>
/changeinfo?usid=<?php echo $_smarty_tpl->tpl_vars['info']->value['user_id'];?>
'>
                            <table cellpadding="5" cellspacing="1">
                                <tbody><tr>
                                        <td>我的用户名</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td>我的邮箱</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['user_email'];?>
</td>
                                    </tr>
                                     <tr>
                                        <td>我的性别</td>
                                        <td>
                                        
                
                                       
                                            <?php if ($_smarty_tpl->tpl_vars['info']->value['user_sex']=='1'){?>
                                            <input id="User_user_sex_0" value="1" checked="checked" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                            <input id="User_user_sex_2" value="3" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_2">保密</label></span>   
                                            <?php }elseif($_smarty_tpl->tpl_vars['info']->value['user_sex']=='2'){?>
                                            <input id="User_user_sex_0" value="1" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" checked="checked"  type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                            <input id="User_user_sex_2" value="3" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_2">保密</label></span>   
                                            <?php }else{ ?>
                                            <input id="User_user_sex_0" value="1"  type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                            <input id="User_user_sex_2" value="3" checked="checked" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_2">保密</label></span>   
                                             <?php }?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>我的QQ</td>
                                        <td><input type='text' name='user_qq' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['user_qq'];?>
'></td>
                                        
                                    </tr>
                                     <tr>
                                        <td>我的手机</td>
                                        <td><input type='text' name='user_tel' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['user_tel'];?>
'></td>
                                       
                                    </tr>
                                     <tr>
                                        <td>我的学历</td>
                                        <td>
                                        <?php if ($_smarty_tpl->tpl_vars['info']->value['user_xueli']=='2'){?>
                                        <select name="user_xueli" id="user_xueli">
                                                <option value="1">-请选择-</option>
                                                <option value="2" selected="selected">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5">大学</option>
                                            </select> 
                                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['user_xueli']=='3'){?>
                                        <select name="user_xueli" id="user_xueli">
                                                <option value="1">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3" selected="selected">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5">大学</option>
                                            </select> 
                                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['user_xueli']=='4'){?>
                                        <select name="user_xueli" id="user_xueli">
                                                <option value="1">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4" selected="selected">高中</option>
                                                <option value="5">大学</option>
                                            </select> 
                                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['user_xueli']=='5'){?>
                                        <select name="user_xueli" id="user_xueli">
                                                <option value="1">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5" selected="selected">大学</option>
                                            </select> 
                                        <?php }else{ ?>
                                            <select name="user_xueli" id="user_xueli">
                                                <option value="1" selected="selected">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5">大学</option>
                                            </select> 
                                        <?php }?>                                                      
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>我的运动爱好</td>
                                        
                                        <!-- 这里有个0的判断 -->
                                          <td>
                                            <?php if (strpos($_smarty_tpl->tpl_vars['info']->value['user_hobby'],'1')>-1){?>  
                                                篮球<?php }?>
                                            <?php if (strpos($_smarty_tpl->tpl_vars['info']->value['user_hobby'],'3')>-1){?>
                                                足球<?php }?>
                                            <?php if (strpos($_smarty_tpl->tpl_vars['info']->value['user_hobby'],'2')>-1){?>
                                                排球<?php }?>
                                            <?php if (strpos($_smarty_tpl->tpl_vars['info']->value['user_hobby'],'4')>-1){?>
                                                棒球 <?php }?> 
                                          </td>                              
                                    </tr>
                                     <tr>
                                        <td>我的简介</td>
                                        <td><textarea name='user_introduce'><?php echo $_smarty_tpl->tpl_vars['info']->value['user_introduce'];?>
</textarea></td>
                                    </tr>
                                </tbody></table>  
                                <input type='submit' value='修改'>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html><?php }} ?>