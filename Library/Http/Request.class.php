<?php
namespace Library\Http;

/**
 * HTTP请求类
 * 
 * @author hongker
 * @package Library\Http
 * @version 1.0
 */
class Request {
	
	/**
	 * 提交方式
	 * @var string
	 * @access protected
	 */
	protected $method;
	/**
	 * 构造函数
	 */
	public function __construct() {
		echo 'request <br>';
	}
	
	/**
	 * 初始化
	 */
	public function initialize() {
	
	}
	
	/**
	 * 设定提交方法
	 * @param unknown $method
	 */
	public function setMethod($method) {
		$this->method = $method;
	}
	
	/**
	 * 获取提交方法
	 */
	public function getMethod() {
		return $this->method;
	}
	
	/**
	 * 检测提交方法是否是post
	 */
	public function isPost() {
		
	}
	
	/**
	 * 获取数据
	 * @param String $name 数据名称
	 * @param String $filter 过滤类型
	 * 
	 * @return 变量
	 */
	public function getPost($name,$filter) {
		return $_POST[$name];
	}
}