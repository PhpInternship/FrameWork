<?php
/**
 * 标签类
 */
namespace Library\Util;

class Tag {
	/**
	 * 构造方法
	 */
	public function __construct() {
		
	}
	
	/**
	 * 引入css
	 * @param String $css css文件所在路径
	 */
	public function stylesheetLink($css) {
		echo "<link rel=stylesheet type=text/css href=$css />";
	}
	
	public function javascriptInclude($js) {
		echo "<script type=text/javascript src=$js></script>";
	}
}

?>