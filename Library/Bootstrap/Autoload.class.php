<?php 
/**
 * 自动加载类文件
 */
namespace Library\Bootstrap;
use Library\Config\Load;
use Library\Util\Page;
class Autoload {
	/**
	 * 自动加载
	 */
	public function __construct() {
		spl_autoload_register(function ($class) {
			include $class . '.class.php';
		});
		
// 		$app = new Application();
// 		$configs = new Load(APP.'/configs/config.php');
// 		echo $configs->get('auth');
		
// 		$configs->set('auth',0);
		
// 		echo $configs->get('auth');
		
// 		$tag = new Tag();
// 		$tag->stylesheetLink('/css/test.css');
		$currentPage = 1;
		$data = array(
			array('hongker','20'),array('xiaok',18),
		);
		
		$page = new Page(array(
			'data' => $data,
			'row' => 10,
			'currentPage' => $currentPage,
		));
		
		echo $page->totalCount;
	}
	
	
}