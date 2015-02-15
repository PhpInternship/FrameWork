<?php
/**
 * 视图类
 */
namespace Library\MVC;

class View {
	/**
	 * 视图路径
	 * @var string
	 * @access protected
	 */
	protected $viewDir;
	/**
	 * 获取视图路径
	 * @return string
	 */
	
	/**
	 * 开启缓冲区
	 * 
	 */
	public function start() {
		//ob_start();
	}
	
	/**
	 * 入口参数为Dispatcher的 ControllerName / ActionName / Params
	 */
	public function render() {
		
	}
	
	/**
	 * 结束缓冲区的接收
	 */
	public function finish() {
		//ob_end_flush();
	}
	
	public function getViewsDir() {
		return $this->controllerDir;
	}
	
	/**
	 * 设定视图路径
	 * @param string $modelDir
	 */
	public function setViewsDir($modelDir) {
		$this->modelDir = $modelDir;
	}
}