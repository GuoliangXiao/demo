<?php
namespace Apps\Controller;
use Think\Controller;
class TileController extends XController {
    public function index(){ 
    	parent::index();
    	$this->display();
    }
}