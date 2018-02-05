<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Home\Model\CommentModel;
class PageController extends Controller {
    function index(){
        $start=I('post.start');
        $num=I('post.num');
        $app_id=I('post.app_id');

        $cm=new CommentModel();       
        $comment=$cm->CommentList($pid=0,$app_id,$commentList=array(),$spac=0,$pauthor=NULL,$start,$num);
        $this->assign('comment_len',count($comment));
        $this->assign('commentList',$comment);
        $this->assign('app_id_p',$app_id);
        layout(false);
        $htmls=$this->fetch('index');
        $this->ajaxReturn(array('status'=>1,'info'=>$htmls));
    }

    public function addComment(){
        $rules = array(//定义动态验证规则
            array('comment','require','评论不能为空'),
            array('username','require','昵称不能为空'),
            array('username', '2,15', '用户名长度必须在2-15位之间！', 0, 'length', 2),
        );
        $data=array(
            'content'=>I('post.comment'),
            'ip'=>get_client_ip(),
            'add_time'=>time(),
            'pid'=>I('post.pid'),
            'author'=>I('post.username'),
            'email'=>I('post.mail'),
            'app_id'=>I('post.app_id'),
        );

        $comment = M("comment"); // 实例化User对象
        if (!$comment->validate($rules)->create()){//验证昵称和评论
            exit($comment->getError());
        }else{
            $add=$comment->add($data);
            if($add){
                $this->success('评论成功');
            }else{
                $this->error('评论失败');
            }
        }
    }
    function commentUp(){
        $user=new Model('comment');
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