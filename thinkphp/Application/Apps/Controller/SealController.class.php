<?php
namespace Apps\Controller;
use Think\Controller;
class SealController extends XController {
    public function index(){ 
    	parent::index();
    	$this->display();    	
    }
}