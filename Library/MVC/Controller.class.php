<?php
/**
 * 控制器类
 */
namespace Library\MVC;

use Library\Config\Load;
use App\Controller\Base;
class Controller {
	public function test() {
		self::getController('BaseController.php');
		$action = 'indexAction';
		echo Base::$action();
	}
	
	/**
	 * 获取控制器路径
	 */
	public function getController($controller) {
		$configs = new Load(APP.'/configs/config.php');
		$controllerDir = $configs->get('controller_dir');
		
		require_once $controllerDir.$controller;
		
	}
	
	/**
	 * 开始执行路由请求前的处理
	 */
	public function beforeExecuteRoute() {
	
	}
	
	/**
	 * 初始化
	 */
	public function initialize() {
		
	}
	
	/**
	 * 路由请求执行结束后
	 */
	public function afterExecuteRoute() {
	
	}
}