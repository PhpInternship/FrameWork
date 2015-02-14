<?php
/**
 * 实例化应用类
 */
namespace Library\Bootstrap;

class Application {
	/**
	 * 启动应用
	 */
	public static function start() {
		spl_autoload_register("Library\Bootstrap\Application::autoload");
	}
	
	public function test() {
		echo 'test,application';
	}
	
	public static function autoload($class) {
		include $class.EXT;
	}
}