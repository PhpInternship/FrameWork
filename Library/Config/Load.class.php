<?php
/**
 * 加载配置文件
 */
namespace Library\Config;

class Load {
	/**
	 * 
	 */
	private $configs;
	
	/**
	 * 构造函数，加载配置项
	 * @param String $config_path
	 */
	public function __construct($config_path) {
		$this->configs = require_once $config_path;
	}
	
	/**
	 * 返回配置项
	 * @param String $key
	 */
	public function get($key) {
		return $this->configs[$key];
	}
	
	/**
	 * 动态设定配置项
	 * @param String $key 配置项键名
	 * @param Mixed $value 配置项值
	 */
	public function set($key,$value) {
		$this->configs[$key] = $value;
	}
	
}