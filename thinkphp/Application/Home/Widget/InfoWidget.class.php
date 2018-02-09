<?php
namespace Home\Widget;
use Think\Controller;
class InfoWidget extends Controller {
    public function index(){ 	
        $ip=get_client_ip();
        if($ip=='0.0.0.0'){
            $ip='218.197.20.20';
        }
        $place=taobaoIP($ip);
        $city=$place['city'];
        $sc=new \Apps\Controller\WeatherController();
        $weather_info=$sc->getW($city);
        $this->assign('weather_info',$weather_info);
       
        $browser=getBrowser();
        $os=get_os();

        $user_info['ip']=$ip;
        $user_info['browser']=$browser;
        $user_info['os']=$os;
        $user_info['place']=$place['province'].$place['city'];
        $this->assign('user_info',$user_info);
    	$this->display(T('Home@Info/index'));
    }
  
}