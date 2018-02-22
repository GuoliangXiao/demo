<?php
namespace Apps\Controller;
use Think\Controller;
class SnakeController extends XController {
    public function index(){ 
    	parent::index();
    	$this->display();
    }
}