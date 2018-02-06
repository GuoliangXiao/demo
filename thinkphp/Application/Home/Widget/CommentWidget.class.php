<?php
namespace Home\Widget;
use Think\Controller;
use Home\Model\CommentModel;
class CommentWidget extends Controller {
    public function index($app_id=0){
    	//$app_id=I('get.app_id');
        $this->assign('app_id',$app_id);
        $count=M('comment')-> where(array('pid'=>0,'status'=>1,'app_id'=>$app_id))->count();
        $num=4;
        $page=ceil($count/$num);
        $this->assign('comment_count',$count);
        $this->assign('num',$num);
        $this->assign('page',$page);
    	$this->display(T('Home@Comment/index'));
    }
    function showComment($start,$num,$app_id){
        $cm=new CommentModel(); 
        $comment=$cm->CommentList($pid=0,$app_id,$commentList=array(),$spac=0,$pauthor=NULL,$start,$num);
        $this->assign('comment_len',count($comment));
        $this->assign('commentList',$comment);
        $this->display(T('Home@Page/index'));
    }
}