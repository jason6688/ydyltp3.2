<?php
namespace Admin\Model;

use Think\Model;

class MenuModel extends Model
{
	protected $tableName = 'menu';
	private static $model;
	
	public function __construct(){
		parent::__construct($name='',$tablePrefix='',$connection='');
		if(!self::$model){//单例
			self::$model = M('Menu');
		}
		
	}
	/**
	 * 获取菜单数据
	 */
	public function getMenu(){
		
		$menus = self::$model->select();
		
		$result = $this->getMenuTree($menus);
		return $result;
	}
	
	/**
	 * 
	 * @param unknown $param
	 */
	private function getMenuTree($data) {
		$tree = [];
		
		foreach ($data as $v){
			
				$tree[$v['pid']][] = $v;

		}
		
		foreach ($data as $v){
			foreach ($tree as $kk=>$vv){
				if($kk == $v['id']){
					$res[$v['menu_name']] = $vv;
				}
			}
		}
		
		return $res;
		
	}
	
	
	
	
	
	
	
	
	
	
	
}