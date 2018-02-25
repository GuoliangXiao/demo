<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class TableController extends Controller{
	public function index(){
		check_admin();
		$db_tables=D()->db()->getTables();
		$this->assign('db_tables',$db_tables);
		$this->display();
	}
}