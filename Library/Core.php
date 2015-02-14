<?php
/**
 * 框架核心文件
 */

/**
 * 后缀名
 * @var String
 */
const EXT = '.class.php'; 

require_once Lib.'/Bootstrap/Application'.EXT;

use Library\Bootstrap\Application,
Library\Config\Load,
Library\Util\Dispatcher;

//启动应用
Application::start();

//加载配置项
$configs = new Load(APP.'/configs/config.php');

//实例化调度器
$dispatcher = new Dispatcher();