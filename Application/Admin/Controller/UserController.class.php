<?php
namespace Admin\Controller;
//use Think\Controller;
use Admin\Base\BaseController;

class UserController extends BaseController
{
	public function index(){
		
		$model = M('User');
		$users = $model->select();
		print_r($res);
		
		$this->assign('users',$users); 
		$this->display();
	}
	
	
	/**
	 * 添加用户 
	 * @author 史亚运
	 * @date 2017-07-16
	 */
	public function add() {
		//layout(false);
		$menus = D('Menu')->getMenu();
		
		//print_r($menus);
		
		$this->display('add');
	}
}