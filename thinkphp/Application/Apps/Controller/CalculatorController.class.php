<?php
namespace Apps\Controller;
use Think\Controller;
use Think\Model;
class CalculatorController extends XController {
    public function index(){ 
    	parent::index();
    	$this->display();    	
    }
}