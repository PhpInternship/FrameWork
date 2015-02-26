<?php
namespace Library\MVC;

/**
 * 视图类
 *
 * @author hongker
 * @package Library\MVC
 * @version 1.0
 */
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
	
	/**
	 * 发送响应
	 */
	public function getContent() {
		ob_start();
		echo 'this is view content';
// 		$content = ob_get_contents();//取得php页面输出的全部内容
// 		$fp = fopen("output00001.html", "w"); //创建一个文件，并打开，准备写入
// 		fwrite($fp, $content); //把php页面的内容全部写入output00001.html，然后……
// 		fclose($fp);
		ob_flush();
	}
}