<?php
namespace Apps\Controller;
use Think\Controller;
class GobangController extends XController {
	public function index(){
		parent::index();
		$this->display();
	}
}