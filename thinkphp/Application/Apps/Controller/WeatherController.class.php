<?php
namespace Apps\Controller;
use Think\Controller;
use Think\Model;
class WeatherController extends Controller {
    public function index(){ 
    	$id=I('get.id');
        $app_id=$id;
    	$this->assign('app_id',$id);
    	$city_num='101010100';
    	//$url="http://wthrcdn.etouch.cn/weather_mini?citykey=".$city_num;
    	//$info=file_get_contents("compress.zlib://".$url);
    	//$this->assign('info',$info);
    	$this->display();    	
    }
 
 	public function getWeather(){
 		$city=I('post.city');
 		$city_id=-1;
 		$path="../thinkphp/Public/Apps/Weather/cities.xml";
 		$xml = new \DOMDocument();		
    	$xml -> load($path);
    	//var_dump($xml);
    	foreach ($xml->getElementsByTagName("CityInfo") as $cites) {
        $city_name = $cites -> getAttribute("Name");
        if ($city == $city_name) {
            $city_num = $cites -> getAttribute("WeatherCode");
            if (strlen($city_num) == 9) {
                $city_id= $city_num;
                break;
            	}
        	}
    	}
        if($city_id==-1){
            $this->ajaxReturn(array('status'=>0));
        }
    	$url="http://wthrcdn.etouch.cn/weather_mini?citykey=".$city_id;
    	$info=file_get_contents("compress.zlib://".$url);
        $this->assign('json_info',$info);
        $info=json_decode($info,true);
        
        $this->assign('info',$info);
    	//echo $info;
    	layout(false);
        $htmls=$this->fetch('get_weather');
        $this->ajaxReturn(array('status'=>1,'info'=>$htmls));
 	}
}