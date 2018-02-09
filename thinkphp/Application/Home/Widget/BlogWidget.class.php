<?php
namespace Home\Widget;
use Think\Controller;
use Think\Model;
class BlogWidget extends Controller {
    public function index($start,$limit){ 	
        $a=M('article');
        $wh['status']=1;
        $count=$a->where($wh)->count();
        $page=ceil($count/$limit);
        $this->assign('blogpage',$page);
        $article=$a->where($wh)->order('created_at desc')->limit($start,$limit)->select();
        $this->assign('article',$article);

        $read=$a->where($wh)->field('id,title,author,created_at,read_times,love_times')->order("read_times desc")->limit(5)->select();
        $this->assign('read',$read);
    	$this->display(T('Home@Blog/index'));
    }
     public function blogrank(){
        $a=M('article');
        $wh['status']=1;
        $read=$a->where($wh)->field('id,title,author,created_at,read_times,love_times')->order("read_times desc")->limit(5)->select();
        $this->assign('read',$read);
        $this->display(T('Home@Blog/blogrank'));
     }
}