<?php
namespace Home\Model;
use Think\Model;
class CommentModel extends Model{
	 //评论列表
    public function CommentList($pid=0,$app_id,$category,&$commentList=array(),$spac=0,$pauthor=NULL,$start,$num){
        static $i=0;
        $spac=$spac+1;//初始为1级评论
        $pauthor=$pauthor;
        $List;
        if($pid==0){
            $List=M('comment')->limit($start,$num)-> where(array('pid'=>$pid,'status'=>1,'app_id'=>$app_id,'category'=>$category))->select();
        }else{
            $List=M('comment')-> where(array('pid'=>$pid,'status'=>1,'app_id'=>$app_id,'category'=>$category))->select();
        }       
        foreach($List as $k=>$v){
            $commentList[$i]['level']=$spac;//评论层级
            $commentList[$i]['author']=$v['author'];
            $commentList[$i]['id']=$v['id'];
            $commentList[$i]['pid']=$v['pid'];//此条评论的父id
            $commentList[$i]['content']=$v['content'];
            $commentList[$i]['time']=date('Y-m-d',strtotime($v['created_at']));
            $p=taobaoIP($v['ip']);
            $commentList[$i]['place']=$p['province'].$p['city'];
            $commentList[$i]['love_times']=$v['love_times'];
            $commentList[$i]['app_id']=$v['app_id'];
            $commentList[$i]['pauthor']=$pauthor;
            $i++;
            $this->CommentList($v['id'],$app_id,$category,$commentList,$spac,$v['author'],0,0);
        }
        return $commentList;
    }
}