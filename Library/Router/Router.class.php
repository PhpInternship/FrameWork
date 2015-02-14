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
}