<?php
namespace Admin\Controller;

use Think\Controller;

class LayoutController extends Controller
{
	
	public function index(){
		
		$model = M('Menu');
		
		$res = $model->select();
		print_r($res);
		$this->display();
	}
	
}