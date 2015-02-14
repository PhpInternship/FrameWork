<?php
use Library\Bootstrap\Autoload;
use Library\Util\DI;
use Library\Database\DB;
/**
 * 入口文件,自动加载类文件
 */


/**
 * 定义公共目录,应用目录，框架目录
 */
define("Public",__DIR__);
define("APP",__DIR__.'../app/');
define("Lib",__DIR__.'../Library/');

require_once  Lib.'Core.php';

exit;
/**
 * 请求资源
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$autoload = new Autoload($uri);



// $db = new PDO("mysql:host=localhost;dbname=framework", 'root', 'hongker',array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
//   ));


$di = new DI();

//指定数据库
$di->set('db',function() {
	return new DB('localhost','root','hongker','framework','utf8');
});

$db = $di->get('db');
$db()->execute("select * from users");





