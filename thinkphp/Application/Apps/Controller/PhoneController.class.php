<?php
namespace Apps\Controller;
use Think\Controller;
class PhoneController extends XController {
	public function index(){
		parent::index();
		$this->display();
	}
	public function getPlace(){
		$num=I('post.num');
		$url="http://www.baifubao.com/callback?cmd=1059&callback=show_result&phone=".$num;
		$content=file_get_contents($url);
		if($contents==""){
			$ch = curl_init();
			$timeout = 30;
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$content = curl_exec($ch);
			curl_close($ch);
		}
		//echo $content;
		$this->ajaxReturn($content);
	}
	public function getMessage(){
		$num=I('post.num');
		$m=M('app_phone');
		$wh['phone']=$num;
		$wh['status']=1;
		$info=$m->where($wh)->select();
		$this->ajaxReturn($info,'JSON');
	}
	public function postMessage(){
		$sms=I('post.sms');
		$num=I('post.num');
		$m=M('app_phone');
		$data['phone']=$num;
		$data['message']=$sms;
		if($m->add($data)){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(0);
		}
	}
}