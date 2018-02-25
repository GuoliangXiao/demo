<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class AppListController extends Controller {
	function getApp(){
		$start=I('post.start');
        $limit=I('post.limit');
        $a=M('apps');
        $wh['status']=1;      
        $apps=$a->where($wh)->limit($start,$limit)->select();
        foreach ($apps as $key => $value) {
        	$apps[$key]['url']=generate_url($apps[$key]['url'],$apps[$key]['id']);
        	$apps[$key]['icon']='./Public/Apps/Icon/'.$apps[$key]['icon'].'.gif';
        }
        $this->ajaxReturn($apps,'JSON');
	}
}