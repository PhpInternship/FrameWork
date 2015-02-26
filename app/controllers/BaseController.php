<?php
namespace App\Controllers;

use Library\MVC\Controller;
/**
 * 基本控制器类
 */
class BaseController extends Controller {
	public function indexAction() {
		echo __NAMESPACE__.',index';
	}
}