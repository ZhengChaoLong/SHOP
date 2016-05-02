<?php

header("content-type:text/html,charset=utf-8");
//引入tp框架的接口文件

//设置模式
define("APP_DEBUG",true);
//define("App_DEBUG",false);

define('CSS_URL','/shop/Home/public/css/');
define('IMG_URL','/shop/Home/public/images/');
define('JS_URL','/shop/Home/public/js/');

//Admin
define('ADMIN_CSS_URL','/shop/Admin/Public/css/');
define('ADMIN_IMG_URL','/shop/Admin/Public/img/');
define('ADMIN_JS_URL','/shop/Admin/Public/js/');








require_once("..//ThinkPhP/ThinkPHP.php");

?>

