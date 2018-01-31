<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class PageController extends Controller {
    public function index(){
    	//echo THINK_VERSION;
        $count=M('comment')-> where(array('pid'=>0,'status'=>1,'app_id'=>0))->count();
        $num=4;
        $page=ceil($count/$num);
        $this->assign('comment_count',$count);
        $this->assign('num',$num);
        $this->assign('page',$page);
    	$this->display();
    }

    public function  addComment(){
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

    //评论列表
    function CommentList($pid=0,$app_id,&$commentList=array(),$spac=0,$pauthor=NULL,$start,$num){
        static $i=0;
        $spac=$spac+1;//初始为1级评论
        $pauthor=$pauthor;
        $List;
        if($pid==0){
            $List=M('comment')->limit($start,$num)-> where(array('pid'=>$pid,'status'=>1))->select();
        }else{
            $List=M('comment')-> where(array('pid'=>$pid,'status'=>1))->select();
        }       
        foreach($List as $k=>$v){
            $commentList[$i]['level']=$spac;//评论层级
            $commentList[$i]['author']=$v['author'];
            $commentList[$i]['id']=$v['id'];
            $commentList[$i]['pid']=$v['pid'];//此条评论的父id
            $commentList[$i]['content']=$v['content'];
            $commentList[$i]['time']=$v['add_time'];
            $commentList[$i]['love_times']=$v['love_times'];
            $commentList[$i]['app_id']=$v['app_id'];
            $commentList[$i]['pauthor']=$pauthor;
            $i++;
            $this->CommentList($v['id'],$app_id,$commentList,$spac,$v['author'],0,0);
        }
        return $commentList;
    }
    function pageNext(){
        $start=I('post.start');
        $num=I('post.num');
        $app_id=0;
        $comment=$this->CommentList($pid=0,$app_id,$commentList=array(),$spac=0,$pauthor=NULL,$start,$num);
        $this->assign('commentList',$comment);
        layout(false);
        $htmls=$this->fetch('page');
        $this->ajaxReturn(array('status'=>1,'info'=>$htmls));
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