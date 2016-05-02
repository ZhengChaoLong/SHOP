<?php /* Smarty version Smarty-3.1.6, created on 2016-04-30 14:23:18
         compiled from "D:/2016XT/test02/shop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:508572074c6755f22-59123116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5dca4f148fa0a7644f9718b9b1aa9b1a6f84990' => 
    array (
      0 => 'D:/2016XT/test02/shop/Admin/View\\Manager\\login.html',
      1 => 1461997368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508572074c6755f22-59123116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_572074c68731b',
  'variables' => 
  array (
    'error' => 0,
    'captcha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572074c68731b')) {function content_572074c68731b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
        <title>用户登录</title>
    </head>
    <body id="userlogin_body">
        
<div class='contain'>
<h1>管理员登陆页面</h1>
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>                                    
                                        <li class="user">
                                            <span class="user_main_text">用户名： </span>
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="admin_user"> </li></ul>
                                            <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                                 
                                        
                                        <li>
                                            <span class="user_main_text">密&nbsp;&nbsp;码： </span>
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="admin_psd" type="password">
                                        </li>        
                     
                   
                                    <li>
                                        <span class="user_main_text">验证码：</span>
                                        <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                                        <img src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg?'+Math.random()" alt="验证码" />
                                        <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</span>
                                    </li> 
                                    <li>
                                        <input type="submit" name="submit" value="submit" class="submit">

                                    </li>  
                <ul>
               
        </form>

    </div>
                
    </body>
</html><?php }} ?>