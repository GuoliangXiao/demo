<?php
namespace Apps\Controller;
use Think\Controller;
class Base64codeController extends XController {
	public function index(){
		parent::index();
		$this->display();
	}
}