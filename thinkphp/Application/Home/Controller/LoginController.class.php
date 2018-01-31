<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Org\ThinkSDK\ThinkOauth;
class LoginController extends Controller {
    public function index(){
    	//echo THINK_VERSION;
    	$this->display();
    }
    public function login($type = null){
        empty($type) && $this->error('参数错误');

        //加载ThinkOauth类并实例化一个对象
        $sns  = ThinkOauth::getInstance($type);

        //跳转到授权页面
        redirect($sns->getRequestCodeURL());
    }
}