<?php
/**
 * 实例化应用类
 */
namespace Library\Bootstrap;

class Application {
	
	/**
	 * 控制器路径
	 * @var string
	 * @access protected
	 */
	protected $controllerDir;
	
	/**
	 * 模型路径
	 * @var string
	 * @access protected
	 */
	protected $modelDir;
	
	
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
	
	/**
	 * 注册控制器路径和模型路径
	 * @param array $dirs
	 */
	public function registerDirs(Array $dirs) {
		$this->setControllersDir($dirs['controller']);
		$this->setModelsDir($dirs['model']);
	}
	
	/**
	 * 设定控制器路径
	 * @param string $controllerDir
	 */
	public function setControllersDir($controllerDir) {
		$this->controllerDir = $controllerDir;
	}
	
	/**
	 * 获取控制器路径
	 * @return string
	 */
	public function getControllersDir() {
		return $this->controllerDir;
	}
	
	/**
	 * 设定模型路径
	 * @param string $modelDir
	 */
	public function setModelsDir($modelDir) {
		$this->modelDir = $modelDir;
	}
	
	/**
	 * 获取模型路径
	 * @return string
	 */
	public function getModelsDir() {
		return $this->modelDir;
	}
}