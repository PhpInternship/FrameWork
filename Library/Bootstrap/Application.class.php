<?php
namespace Library\Bootstrap;
use Library\MVC\View;
use Library\Http\Request;

/**
 * 实例化应用类
 */
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
	 * di
	 * @var Library\Util\DI
	 * @access protected
	 */
	protected $_di;
	
	/**
	 * 构造方法
	 */
	public function __construct($di) {
		$this->setDI($di);
	}
	/**
	 * 启动应用
	 */
	public static function start() {
		spl_autoload_register("Library\Bootstrap\Application::autoload");
	}
	
	/**
	 * 设定di
	 */
	public function setDI($di) {
		$this->_di = $di;
	}
	
	/**
	 * 获取di
	 * @return Library\Util\DI
	 */
	public function getDI() {
		return $this->_di;
	}
	
	/**
	 * 加载类文件
	 * @param unknown $class
	 */
	public static function autoload($class) {
		if (is_file($class.'.class.php')) {
			include_once $class.'.class.php';
		}elseif (is_file($class.'.php')) {
			include_once $class.'.php';
		}
		
		
		
	}
	
	/**
	 * 模块启动前
	 */
	public function beforeStartModule() {
	
	}
	
	/**
	 * 模块启动后
	 */
	public function afterStartModule() {
	
	}
	
	/**
	 * 进入分发器前
	 * 初始化View
	 * 初始化Dispatcher，将Router中的参数复制到Dispatcher
	 * 调用View View->start()开启缓冲区
	 */
	public function beforeHandleRequest() {
		
	}
	
	/**
	 * application:afterHandleRequest 分发结束
	 * Application获得分发后的输出 $dispatcher->getReturnedValue()
	 */
	public function afterHandleRequest() {
	
	}
	
	/**
	 * 准备响应
	 * 将Library\Mvc\View->getContent()通过Library\Http\Response->setContent()放入Response
	 */
	public function beforeSendResponse() {
		
	}
	
	/**
	 * 渲染视图，分发结束
	 * 调用Library\Mvc\View->render()，入口参数为Dispatcher的 ControllerName / ActionName / Params
	 * 调用Library\Mvc\View->finish()结束缓冲区的接收
	 */
	public function viewRender() {
		
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
	
	/**
	 * 返回响应
	 */
	public function handle() {
		
		/**
		 * 1.获取请求
		 * 2.转发请求
		 * 3.调用控制器的响应方法
		 * 4.通过model查询数据库
		 * 5.调用视图view
		 * 6.返回响应
		 * 7.输出内容
		 *
		 */
		
		$request = new Request();
		
		$dispatcher = $this->getDI()->get('dispatcher');
		//$route = $this->getDI()->get('dispatcher')->process();
		
		//require_once APP.$this->getControllersDir().$route['controller'].'.php';
		
		//$controller = new $route['controller']();
		
		
		//return new View();
	}
	
}