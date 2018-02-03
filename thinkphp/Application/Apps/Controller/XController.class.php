<?php
namespace Apps\Controller;
use Think\Controller;
use Think\Model;
class XController extends Controller {
    public function index(){ 
    	$id=I('get.id');
        $app_id=$id;
    	$this->assign('app_id',$id); 
    	$app=M('apps');
    	$wh['id']=$id;
        $wh['status']=1;
    	$love_times=$app->where($wh)->getField('love_times');
    	$this->assign('love_times',$love_times);  	   	
    }
}