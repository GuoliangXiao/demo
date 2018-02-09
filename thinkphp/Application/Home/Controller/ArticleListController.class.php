<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class ArticleListController extends Controller {
    public function index(){
    	$this->assign('app_id',0);
    	$this->assign('category',1);
    	
    	$a=M('article');
    	$wh['status']=1;
    	$article=$a->where($wh)->select();
    	$this->assign('article',$article);
    	$this->display();
    }
    public function getBlog(){
        $start=I('post.start');
        $limit=I('post.limit');
        $a=M('article');
        $wh['status']=1;
        $article=$a->where($wh)->limit($start,$limit)->select();
        foreach ($article as $key => $value) {
            $article[$key]['content']= filter_content($value['content']);
            $article[$key]['created_at']= date('Y-m-d',strtotime($value['created_at']));
            $article[$key]['url']= U('Home/Article/index?id='.$article[$key]['id']);
        }
        //var_dump($article);
        //$info=json_encode($article);
        $this->ajaxReturn($article,'JSON');
    }
}