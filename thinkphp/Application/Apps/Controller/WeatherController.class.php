<?php
namespace Apps\Controller;
use Think\Controller;
use Think\Model;
class WeatherController extends Controller {
    public function index(){ 
    	$id=I(id);
    	//echo $id;
    	$city_num='101010100';
    	$url="http://wthrcdn.etouch.cn/weather_mini?citykey=".$city_num;
    	$info=file_get_contents("compress.zlib://".$url);
    	$this->assign('info',$info);
    	$this->display();    	
    }
 
 	public function getWeather(){
 		$city=I('post.city');
 		$city_id;
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
            	}
        	}
    	}
    	$url="http://wthrcdn.etouch.cn/weather_mini?citykey=".$city_id;
    	$info=file_get_contents("compress.zlib://".$url);
    	//echo $info;
    	$this->ajaxReturn($info);
 	}
}