<?php
namespace Library\Router;

/**
 * 路由类
 * 
 * @author hongker
 * @package Library\Router
 * @version 1.0
 */
class Router {
	
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
	 * 构造方法
	 */
	public function __construct() {
		
	}
	
	/**
	 * 初始化
	 */
	public function initalize($controller,$action) {
		$this->controller = $controller;
		$this->action = $action;
	}
	
	/**
	 * 处理请求
	 */
	public function handle() {
		
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
	 * 获取模块名称
	 * @return string 模块名称
	 */
	public function getModuleName() {
		return $this->module;
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
	
	
}