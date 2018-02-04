<?php
namespace Apps\Controller;
use Think\Controller;
use Think\Model;
class ScoreController extends Controller {
    public function index(){ 
    	$s=M('score');
        $app_id=I('get.app_id');
        $wh['status']=1;
        $wh['app_id']=$app_id;
        $score=$s->where($wh)->order('score desc')->limit(10)->select();
        $this->assign('score',$score);
        $this->display();
    }
    public function uploadScore(){
        $data['name']=I('post.name');
        $data['app_id']=I('post.app_id');
        $data['score']=I('post.score');
        $s=M('score');
        $rule = array(array('name','2,15', '用户名长度必须在2-15位之间！', 0, 'length', 2));
        $r;
        if($s->validate($rule)){
            if($s->add($data)){
               $r['status']=1;
               $r['info']='添加成功';
            }else{
                $r['status']=0;
                $r['info']='添加数据失败，请重新添加';
            }
        }else{
            $r['status']=0;
            $r['info']=$s->getError();
        }
        $this->ajaxReturn($r);
    }
}