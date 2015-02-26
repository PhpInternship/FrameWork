<?php
/**
 * 配置文件
 */
return array(
	//database
	'host' => 'localhost',
	'username' => 'root',
	'password' => 'hongker',
	'dbname' => 'framework',
	'charset' => 'utf8',
		
	//other configs
	'auth' => 1, //验证
	'default_module' => 'home', //默认模块
	'controller_dir' => 'controllers/', //控制器路径
	'model_dir' => 'models/',
	'view_dir' => 'views/',
);