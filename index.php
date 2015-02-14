<?php
use Library\Bootstrap\Autoload;
/**
 * 入口文件,自动加载类文件
 */


/**
 * 定义公共目录,应用目录，框架目录
 */
define("Public",__DIR__);
define("APP",__DIR__.'../app');
define("Lib",__DIR__.'../Library');

require_once  Lib.'/Bootstrap/Autoload.class.php';



/**
 * 请求资源
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$autoload = new Autoload($uri);



