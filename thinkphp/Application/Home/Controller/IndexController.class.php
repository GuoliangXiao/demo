<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
    	//echo THINK_VERSION;
    	$user=new Model('apps'); 
    	$apps=$user->where('status=1')->select();       
        $this->assign('apps',$apps); 
        $loves=$user->where('status=1')->order('love_times desc')->limit(5)->select();
        $this->assign('loves',$loves);
        //$dbFields=$user->getDbFields();
        //$this->assign('dbFields',$dbFields);

    	$this->display();
    	//$d = $_SERVER['DOCUMENT_ROOT'];echo $d;
    }
    public function addHeart(){
        
        $user=new Model('apps');
        $id=I('post.id');
        $wh['id']=$id;
        $wh['status']=1;
        $love_times=$user->where('status=1')->where($wh)->getField('love_times');
        $d=$love_times+1;
        $user->love_times=$d;
        if($user->where($wh)->save())
        {
            $r['status']=1;
            $r['data']=$d;
        }
        $this->ajaxReturn($r);
    }

}