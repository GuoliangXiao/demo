<?php
function generate_url($url,$id){
	if($url){
		return U('Apps/'.$url.'/index?id='.$id);
	}else{
		return U('Apps/Index/index');
	}
}
function comment_level($level){
	return ($level-1);
}
function get_app_url($app_id){
	return U('Home/Page/index?app_id='.$app_id);
}

/**
 * 获取客户端浏览器信息 添加win10 edge浏览器判断
 * @param  null
 * @author  Jea杨
 * @return string 
 */
function get_broswer(){
	 $sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串
     if (stripos($sys, "Firefox/") > 0) {
         preg_match("/Firefox\/([^;)]+)+/i", $sys, $b);
         $exp[0] = "Firefox";
         $exp[1] = $b[1];  //获取火狐浏览器的版本号
     } elseif (stripos($sys, "Maxthon") > 0) {
         preg_match("/Maxthon\/([\d\.]+)/", $sys, $aoyou);
         $exp[0] = "傲游";
         $exp[1] = $aoyou[1];
     } elseif (stripos($sys, "MSIE") > 0) {
         preg_match("/MSIE\s+([^;)]+)+/i", $sys, $ie);
         $exp[0] = "IE";
         $exp[1] = $ie[1];  //获取IE的版本号
     } elseif (stripos($sys, "OPR") > 0) {
		     preg_match("/OPR\/([\d\.]+)/", $sys, $opera);
         $exp[0] = "Opera";
         $exp[1] = $opera[1];  
     } elseif(stripos($sys, "Edge") > 0) {
         //win10 Edge浏览器 添加了chrome内核标记 在判断Chrome之前匹配
         preg_match("/Edge\/([\d\.]+)/", $sys, $Edge);
         $exp[0] = "Edge";
         $exp[1] = $Edge[1];
     } elseif (stripos($sys, "Chrome") > 0) {
		     preg_match("/Chrome\/([\d\.]+)/", $sys, $google);
         $exp[0] = "Chrome";
         $exp[1] = $google[1];  //获取google chrome的版本号
     } elseif(stripos($sys,'rv:')>0 && stripos($sys,'Gecko')>0){
         preg_match("/rv:([\d\.]+)/", $sys, $IE);
		     $exp[0] = "IE";
         $exp[1] = $IE[1];
     }else {
		$exp[0] = "未知浏览器";
        $exp[1] = ""; 
	 }
     return $exp[0].'('.$exp[1].')';
}
function getBrowser() {
    $user_OSagent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($user_OSagent, "Maxthon") && strpos($user_OSagent, "MSIE")) {
        $visitor_browser = "Maxthon(Microsoft IE)";
    } elseif (strpos($user_OSagent, "Maxthon 2.0")) {
        $visitor_browser = "Maxthon 2.0";
    } elseif (strpos($user_OSagent, "Maxthon")) {
        $visitor_browser = "Maxthon";
    } elseif (strpos($user_OSagent, "Edge")) {
        $visitor_browser = "Edge";
    } elseif (strpos($user_OSagent, "Trident")) {
        $visitor_browser = "IE";
    } elseif (strpos($user_OSagent, "MSIE")) {
        $visitor_browser = "IE";
    } elseif (strpos($user_OSagent, "MSIE")) {
        $visitor_browser = "MSIE 较高版本";
    } elseif (strpos($user_OSagent, "NetCaptor")) {
        $visitor_browser = "NetCaptor";
    } elseif (strpos($user_OSagent, "Netscape")) {
        $visitor_browser = "Netscape";
    } elseif (strpos($user_OSagent, "Chrome")) {
        $visitor_browser = "Chrome";
    } elseif (strpos($user_OSagent, "Lynx")) {
        $visitor_browser = "Lynx";
    } elseif (strpos($user_OSagent, "Opera")) {
        $visitor_browser = "Opera";
    } elseif (strpos($user_OSagent, "MicroMessenger")) {
        $visitor_browser = "微信浏览器";
    } elseif (strpos($user_OSagent, "Konqueror")) {
        $visitor_browser = "Konqueror";
    } elseif (strpos($user_OSagent, "Mozilla/5.0")) {
        $visitor_browser = "Mozilla";
    } elseif (strpos($user_OSagent, "Firefox")) {
        $visitor_browser = "Firefox";
    } elseif (strpos($user_OSagent, "Safari")) {
        $visitor_browser = "Safari";
    } elseif (strpos($user_OSagent, "U")) {
        $visitor_browser = "Firefox";
    }else {
        $visitor_browser = "其它";
    }
    return $visitor_browser;
}

/**
 * 获取客户端操作系统信息包括win10
 * @param  null
 * @author  Jea杨
 * @return string 
 */
function get_os(){
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $os = false;
 
    if (preg_match('/win/i', $agent) && strpos($agent, '95'))
    {
      $os = 'Windows 95';
    }
    else if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90'))
    {
      $os = 'Windows ME';
    }
    else if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent))
    {
      $os = 'Windows 98';
    }
    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent))
    {
      $os = 'Windows Vista';
    }
    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent))
    {
      $os = 'Windows 7';
    }
	  else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent))
    {
      $os = 'Windows 8';
    }else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent))
    {
      $os = 'Windows 10';#添加win10判断
    }else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent))
    {
      $os = 'Windows XP';
    }
    else if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent))
    {
      $os = 'Windows 2000';
    }
    else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent))
    {
      $os = 'Windows NT';
    }
    else if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent))
    {
      $os = 'Windows 32';
    }
    else if (preg_match('/linux/i', $agent))
    {
      $os = 'Linux';
    }
    else if (preg_match('/unix/i', $agent))
    {
      $os = 'Unix';
    }
    else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent))
    {
      $os = 'SunOS';
    }
    else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent))
    {
      $os = 'IBM OS/2';
    }
    else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent))
    {
      $os = 'Macintosh';
    }
    else if (preg_match('/PowerPC/i', $agent))
    {
      $os = 'PowerPC';
    }
    else if (preg_match('/AIX/i', $agent))
    {
      $os = 'AIX';
    }
    else if (preg_match('/HPUX/i', $agent))
    {
      $os = 'HPUX';
    }
    else if (preg_match('/NetBSD/i', $agent))
    {
      $os = 'NetBSD';
    }
    else if (preg_match('/BSD/i', $agent))
    {
      $os = 'BSD';
    }
    else if (preg_match('/OSF1/i', $agent))
    {
      $os = 'OSF1';
    }
    else if (preg_match('/IRIX/i', $agent))
    {
      $os = 'IRIX';
    }
    else if (preg_match('/FreeBSD/i', $agent))
    {
      $os = 'FreeBSD';
    }
    else if (preg_match('/teleport/i', $agent))
    {
      $os = 'teleport';
    }
    else if (preg_match('/flashget/i', $agent))
    {
      $os = 'flashget';
    }
    else if (preg_match('/webzip/i', $agent))
    {
      $os = 'webzip';
    }
    else if (preg_match('/offline/i', $agent))
    {
      $os = 'offline';
    }
    else{
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(strpos($agent, 'macintosh')) {
            $os = 'mac';
        } else if(strpos($agent, 'ipod')) {
          $os = 'ipod';
        } else if(strpos($agent, 'ipad')) {
          $os = 'ipad';
        } else if(strpos($agent, 'iphone')) {
          $os = 'iphone';
        } else if (strpos($agent, 'android')) {
          $os = 'android';
        } else if(strpos($agent, 'unix')) {
          $os = 'unix';
        } else if(strpos($agent, 'linux')) {
          $os = 'linux';
        } else {
          $os = '其他操作系统';
      }
    }
    return $os;  
}
function taobaoIP($clientIP){
    $taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$clientIP;
    $IPinfo = json_decode(file_get_contents($taobaoIP));
    $province = $IPinfo->data->region;
    $city = $IPinfo->data->city;
    $data['province']=$province;
    $data['city']=$city;
    return $data;
}
function is_mobile(){   
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
  $is_mobile = false;   
  foreach ($mobile_agents as $device){
    //这里把值遍历一遍，用于查找是否有上述字符串出现过     
    if (stristr($user_agent, $device)){ 
      //stristr 查找访客端信息是否在上述数组中，不存在即为PC端。      
      $is_mobile = true;      
      break;     
    }   
  }   
  return $is_mobile; 
}
function choose_class(){
  if(is_mobile()){
        echo 'class="container-fluid"';
  }else echo 'class="container"';
}