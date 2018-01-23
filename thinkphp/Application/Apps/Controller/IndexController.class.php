<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
    	
    	$user=new Model('apps'); 
    	$apps=$user->select(); 
        $this->assign('apps',$apps); 
        //$dbFields=$user->getDbFields();
        //$this->assign('dbFields',$dbFields);
    	
    
    	//$name='hello world';
    	//$this->assign('name',$name);
    	//$this->display('updateTable');
    	$this->display();
    	//var_dump($this->fetch());
    	

    }
  
}