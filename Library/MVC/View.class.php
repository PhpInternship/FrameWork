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