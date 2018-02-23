<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class ArticleController extends Controller {
    public function index(){
    	$id=I('get.id');
        $this->addRead($id);
    	$this->assign('app_id',$id);
    	$this->assign('category',1);
    	$wh['status']=1;
    	$wh['id']=$id;
    	$a=M('article');
    	$article=$a->where($wh)->select();
    	//var_dump($article);
    	$this->assign('article',$article);
       
    	$this->display();
    }
    public function addRead($id){
        
        $user=new Model('article');
        $wh['id']=$id;
        $wh['status']=1;
        $read_times=$user->where($wh)->getField('read_times');
        $d=$read_times+1;
        $user->read_times=$d;
        $user->where($wh)->save();    
    }
    public function addHeart(){
        
        $user=new Model('article');
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
    function getBlog(){
        $start=I('post.start');
        $limit=I('post.limit');
        $a=M('article');
        $wh['status']=1;      
        $article=$a->where($wh)->order('created_at desc')->limit($start,$limit)->select();
        $this->ajaxReturn($article,'JSON');
    }
}