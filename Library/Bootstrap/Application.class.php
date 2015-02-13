<?php
/**
 * 实例化应用类
 */
namespace Library\Bootstrap;

class Application {
	/**
	 * 运行app
	 */
	public function run($configs) {
		$this->test();
	}
	
	public function test() {
		echo 'test,application';
	}
}