<?php
return array(
	//'配置项'=>'配置值'
	//
	//
	//在页面底部设置显示跟踪信息
	'SHOW_PAGE_TRACE' => true,


	//设置请求的默认分组
	'DEFAULT_MODULE' => 'Home',   //默认模块
	'MODULE_ALLOW_LIST'=>array('Home','Admin'),   //设置对比模块


	   //开启smarty
	  'TMPL_ENGINE_TYPE'      =>  'Smarty',

	  //配置smarty边界相关配置
	  'TMPL_ENGINE_CONFIG' => array(
	  		//'left_delimiter' => '<%%',
	  		//'right_delimiter' => '%%>',
	  ),


	 'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop0811',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8


    'THINK_EMAIL' => array(

	'SMTP_HOST' => 'smtp.163.com', //SMTP服务器

	'SMTP_PORT' => '465', //SMTP服务器端口

	'SMTP_USER' => '15521215331@163.com', //SMTP服务器用户名

	'SMTP_PASS' => 'zcl777', //SMTP服务器密码

	'FROM_EMAIL' => '15521215331@163.com', //发件人EMAIL

	'FROM_NAME' => 'BLUCE_king', //发件人名称

	'REPLY_EMAIL' => '15521215331@163.com',
	 //回复EMAIL（留空则为发件人EMAIL）

	'REPLY_NAME' => '激活邮箱', //回复名称（留空则为发件人名称）

	),
);