<?php
namespace Apps\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){   	
    	$this->assign('app_id',0);
    	$this->display();    	
    }
  
}