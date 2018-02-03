<?php
namespace Apps\Controller;
use Think\Controller;
class WeatherController extends XController {
    public function index(){ 
    	parent::index();
    	$city_num='101010100';
    	//$url="http://wthrcdn.etouch.cn/weather_mini?citykey=".$city_num;
    	//$info=file_get_contents("compress.zlib://".$url);
    	//$this->assign('info',$info);
    	$this->display();    	
    }

    public function getW($district){
        $city_id=-1;
        $len=strlen($district);
        do{
            $district=substr($district, 0, $len);
            $city_id=$this->getWeatherCityID($district);
            $len--;
        }while($city_id<0&&$len>1);
        $url="http://wthrcdn.etouch.cn/weather_mini?citykey=".$city_id;
        $info=file_get_contents("compress.zlib://".$url);
        $info=json_decode($info,true);
        return $info;      
    }
 	public function getWeather(){
 		$city_all=I('post.city');
        list($province,$city,$district)=explode("/", $city_all, 3);
        
 		$city_id=-1;
 		$len=strlen($district);
        do{
            $district=substr($district, 0, $len);
            $city_id=$this->getWeatherCityID($district);
            $len--;
        }while($city_id<0&&$len>1);
        if($city_id<0){
            $len=strlen($city);
            do{
                $city=substr($city, 0, $len);
                $city_id=$this->getWeatherCityID($city);
                $len--;
            }while($city_id<0&&$len>1);          
        }
        if($city_id<0)
        {
            $this->ajaxReturn(array('status'=>0));
        }
        //$city_id="101010100";
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
    public function getWeatherCityID($city){
        $path="../thinkphp/Public/Apps/Weather/cities.xml";
        $xml = new \DOMDocument();      
        $xml -> load($path);
        //var_dump($xml);
        $city_id=-1;
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
        return $city_id;
    }
}