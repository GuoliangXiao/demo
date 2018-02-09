<?php
namespace Home\Widget;
use Think\Controller;
use Think\Model;
class AppWidget extends Controller {
    public function index($start,$limit){ 	
        $user=new Model('apps'); 
        $apps=$user->where('status=1')->select();       
        $this->assign('apps',$apps);
        $count=$user->where('status=1')->count();
        $page=ceil($count/$limit);
        $this->assign('apppage',$page); 
        $loves=$user->where('status=1')->order('love_times desc')->limit(5)->select();
        $this->assign('loves',$loves);
    	$this->display(T('Home@App/index'));
    }
  
}