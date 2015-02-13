<?php 
/**
 * 自动加载类文件
 */
namespace Library\Bootstrap;
use Library\Config\Load;
use Library\Util\Tag;
class Autoload {
	/**
	 * 自动加载
	 */
	public function __construct() {
		spl_autoload_register(function ($class) {
			include $class . '.class.php';
		});
		
		$app = new Application();
		$configs = new Load(APP.'/configs/config.php');
		echo $configs->get('auth');
		
		$configs->set('auth',0);
		
		echo $configs->get('auth');
		
		$tag = new Tag();
		$tag->stylesheetLink('/css/test.css');
	}
	
	
}