<?php 
/**
 * 自动加载类文件
 */
namespace Library\Bootstrap;

//use Library\Util\Page;
use Library\Util\Dispatcher;
use Library\Config\Load;
use Library\MVC\Controller;
class Autoload {
	/**
	 * 配置项
	 * @var Library\Config\Load
	 * @access private
	 */
	private $configs;
	/**
	 * 自动加载
	 * @param String $uri 请求资源
	 */
	public function __construct($uri) {
		spl_autoload_register(function ($class) {
			include $class . '.class.php';
		});
		//$this->initalize();
		
		//$dispatcher = new Dispatcher($uri,$this->getConfigs());
		
		Controller::test();
		
// 		$app = new Application();
 		
// 		echo $configs->get('auth');
		
// 		$configs->set('auth',0);
		
// 		echo $configs->get('auth');
		
// 		$tag = new Tag();
// 		$tag->stylesheetLink('/css/test.css');
//		分页
// 		$currentPage = 1;
// 		$data = array(
// 			array('hongker','20'),array('xiaok',18),
// 		);
		
// 		$page = new Page(array(
// 			'data' => $data,
// 			'row' => 10,
// 			'currentPage' => $currentPage,
// 		));
		
// 		echo $page->totalCount;
	}
	
	/**
	 * 初始化
	 */
	private function initalize() {
		$this->setConfigs();
	}
	
	/**
	 * 设定配置项
	 */
	private function setConfigs() {
		$this->configs = new Load(APP.'/configs/config.php');
	}
	
	/**
	 * 获取配置项
	 * @return Library\Config\Load $configs 返回配置项
	 */
	public function getConfigs() {
		return $this->configs;
	}
	
	
}