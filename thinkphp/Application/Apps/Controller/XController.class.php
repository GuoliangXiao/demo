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
        $app_data=$app->where($wh)->getField("id,name,name_en,icon_font,love_times");
    	$this->assign('app_data',$app_data);  	   	
    }
}