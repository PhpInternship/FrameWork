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

$autoload = new Autoload();

// use Library\Bootstrap\Application as Application;
// use Library\Config\Load;

// 

// var_dump($configs);exit;
// $app = new Application();
// $app->test();



