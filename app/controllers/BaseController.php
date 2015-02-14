<?php
namespace App\Controller;

use Library\MVC\Controller;
/**
 * 基本控制器类
 */
class Base extends Controller {
	public function index() {
		echo __NAMESPACE__.',index';
	}
}