<?php
namespace Library\Util;
/**
 * 反转注入类
 *
 * @author hongker
 * @package Library\Util
 * @version 1.0
 */
class DI {
	
	/**
	 * 数据库操作类
	 * @var mixed
	 * @access protected
	 */
	protected $db;
	
	/**
	 * 构造方法
	 */
	public function __construct() {
		
	}
	
	/**
	 * 注册服务
	 * @param string $name
	 * @param mixed $definition
	 */
	public function set($name,$definition) {
		$this->$name = $definition;
	}
	
	/**
	 * 获取服务
	 * @param unknown $name
	 */
	public function get($name) {
		return $this->$name;
	}
}