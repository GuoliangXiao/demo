<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
    	//echo THINK_VERSION;
    
        //$dbFields=$user->getDbFields();
        //$this->assign('dbFields',$dbFields);
        $app_limit=16;
        $blog_limit=4;
        $this->assign('app_limit',$app_limit);
        $this->assign('blog_limit',$blog_limit);
    	$this->display();
    	//$d = $_SERVER['DOCUMENT_ROOT'];echo $d;
    }
    public function addHeart(){
        
        $user=new Model('apps');
        $id=I('post.id');
        $wh['id']=$id;
        $wh['status']=1;
        $love_times=$user->where($wh)->getField('love_times');
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