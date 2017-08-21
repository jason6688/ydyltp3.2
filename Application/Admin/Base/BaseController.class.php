<?php
namespace Admin\Base;

use Think\Controller;

class BaseController extends Controller
{
	public function __construct(){
		parent::__construct();
		//layout(false);
		$model = D('Menu');
		$menus = $model->getMenu();
		print_r($menus);
		
		$this->assign('menus',$menus);
	}
}