<?php
/**
 * 调度器类
 * 
 * @author hongker
 * @package Library\Util
 * @version 1.0
 */
namespace Library\Util;


class Dispatcher {
	/**
	 * 模块名称
	 * @var string
	 * @access private
	 */
	private $module;
	
	/**
	 * 控制器名称
	 * @var string
	 * @access private
	 */
	private $controller;
	
	/**
	 * 响应方法名称
	 * @var string
	 * @access private
	 */
	private $action;
	
	/**
	 * uri类型
	 * @var Integer
	 * @access private
	 */
	private $type;
	
	/**
	 * 构造函数
	 * @param String $uri 请求资源
	 */
	public function __construct() {
		$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$this->initalize($uri);		
		
	}
	
	/**
	 * 初始化
	 * @param String $uri 请求资源
	 */
	private function initalize($uri) {
		$uri = explode('/', $uri);
		
		/**
		 * @todo 暂时不实现多模块功能
		 */
		//获取默认模块名称
		//$default_module = $configs->get('default_module');
		
		//设定为默认模块名称
		//$this->setModuleName($default_module);
		
		//设定控制器
		$this->setControllerName($uri[1]);
		$this->setActionName($uri[2]);
		
		var_dump($this->getControllerName());exit;
		
		
		
	}
	
	/**
	 * 获取模块名称
	 * @return string 模块名称
	 */
	public function getModuleName() {
		return $this->module;
	}
	
	private function getDefaultModule() {
		
	}
	
	/**
	 * 设定模块名
	 * @param String $module
	 * @access private
	 */
	private function setModuleName($module) {
		$this->module = $module;
	}
	
	/**
	 * 获取控制器名称
	 * @return string 控制器名称
	 */
	public function getControllerName() {
		return $this->controller;
	}
	
	/**
	 * 设定控制器名
	 * @param String $controller
	 * @access private
	 */
	private function setControllerName($controller) {
		$this->controller = $controller;
	}
	
	/**
	 * 获取响应方法名称
	 * @return string 响应方法名称
	 */
	public function getActionName() {
		return $this->action;
	}
	
	/**
	 * 设定响应方法名
	 * @param String $action
	 * @access private
	 */
	private function setActionName($action) {
		$this->action = $action;
	}
	
	/**
	 * 转发请求
	 * @param Array $route 路由
	 * @route['controller'] 控制器名称
	 * @route['action'] 响应方法名称
	 */
	public function forward(Array $route) {
	
	}
	
}