<?php
/**
 * 定义公共目录,应用目录，框架目录
 */
define("Public",__DIR__);
define("APP",__DIR__.'../app/');
define("Lib",__DIR__.'../Library/');

use Library\Util\DI;
use Library\Bootstrap\Application;



require_once  Lib.'Core.php';


//加载配置项
$configs = new Library\Config\Load(APP.'/configs/config.php');


//实例化反转注入
$di = new DI();

//注入数据库
$di->set('db',function() use($configs) {
	return new Library\Database\DB(
		$configs->get('host'),
		$configs->get('username'),
		$configs->get('password'),
		$configs->get('dbname'),
		$configs->get('charset')
	);
});

//注入视图
$di->set('view',function() use($configs){
	$view = new Library\MVC\View();
	$view->setViewsDir($configs->get('view_dir'));
});

//注入调度器
$di->set('dispatcher',function() {
	return new Library\Util\Dispatcher();
});

$db = $di->get('db');
//$db->execute("select * from users");

$dispatcher = $di->get('dispatcher');
//echo $dispatcher->getControllerName();


$application = new Application($di);

$application->start();

//注册控制器路径和模型路径
$application->registerDirs(array(
		'controller' => $configs->get('controller_dir'),
		'model' => $configs->get('model_dir'),
));




