<?php
namespace Library\MVC;

/**
 * 控制器类
 */
class Controller {
	
	/**
	 * 请求
	 * @var Library\Http\Request
	 * @access protected
	 */
	protected $request;
	
	/**
	 * 响应
	 * @var Library\Http\Response
	 * @access protected
	 */
	protected $response;
	
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
	
	/**
	 * 设定request
	 */
	public function setRequest() {
		
	}
	
	/**
	 * 获取request
	 */
	public function getRequest() {
		
	}
	
	/**
	 * 设定response
	 */
	public function setResponse() {
	
	}
	
	/**
	 * 获取response
	 */
	public function getResponse() {
	
	}
	
}