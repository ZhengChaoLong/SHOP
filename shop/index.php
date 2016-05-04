 <?php

header("content-type:text/html,charset=utf-8");
//引入tp框架的接口文件

//设置模式
define("APP_DEBUG",false);
//define("App_DEBUG",false);

//Home
define('CSS_URL','/Public/css/');
define('IMG_URL','/Public/images/');
define('JS_URL','/Public/js/');

//Admin
define('ADMIN_CSS_URL','/Public/css/');
define('ADMIN_IMG_URL','/Public/img/');
define('ADMIN_JS_URL','/Public/js/');




require_once("../ThinkPHP/ThinkPHP.php");

