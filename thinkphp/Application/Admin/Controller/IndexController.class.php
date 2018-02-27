<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller{
	public function index(){
		switch(user_group()){
			case 0:redirect(U('Admin/Table/index'),0,'');break;
			case -1;$this->display('index');break;
		}
		/*$user=M('user');
		$data['name']='xhust';
		$data['password']=md5('5201314magua');
		$data['group']=0;
		$user->add($data);*/		
	}
	public function login(){
		$user=I('post.user');
		$password=I('post.password');
		$verifycode=I('post.verifycode');
		$v = new \Think\Verify();
		if(!$v->check($verifycode)){
			$this->error('验证码错误');
		}
		$user=M('user');
		$wh['user']=$user;
		$info=$user->where($wh)->select();
		if(count($info)==0){
			$this->error('用户名不存在');
		}
		if($info[0]['password']!=$password){
			$this->error('用户密码错误');
		}
		$info = array('group' => 0, 'status'=>true);
		session('login',$info);
		$this->success('登陆成功',U('index'));
	}
	public function verifyimg(){
  		$Verify = new \Think\Verify();
		$Verify->entry();
	}
}