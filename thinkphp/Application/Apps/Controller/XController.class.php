<?php
namespace Apps\Controller;
use Think\Controller;
class XController extends Controller {
    public function index(){ 
    	$id=I('get.id');
        $app_id=$id;
    	$this->assign('app_id',$id);    	   	
    }
}