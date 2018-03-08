<?php
namespace Apps\Controller;
use Think\Controller;
class IDcardController extends XController {
	public function index(){
		parent::index();
		$this->display();
	}
	public function getID(){
		$id=I('post.id');
		if (strlen($id) == 18) {
		    $result = array("status" => "OK");
		    $data = array("id"=>$id);
		    $head = substr($id, 0, 6);
		    $place = $this->get_place($head);
		    if ($place == "") {
		        $result["status"] = "the id number does not exist!";
		    } else {
		        $data["place"]=$place;
		        $b = substr($id, 6, 8);
		        $birthday=$this->get_birthday($b);
		        $data["birthday"]=$birthday;
		    
		        $s = substr($id, 14, 3);
		        $sex=$this->get_sex($s);
		        $data["sex"]=$sex;
		    }
		    $result["data"]=$data;
		    $this->ajaxReturn($result,'JSON');
		}
	}
	private function get_place($id_num){
	    $xml=new \DOMDocument();
	    $path="../thinkphp/Public/Apps/IDcard/xml/identity.xml";
	    $xml->load($path);
	    foreach ($xml->getElementsByTagName("id") as $id) {
	        if($id->getElementsByTagName("idnumber")->item(0)->nodeValue==$id_num){
	            return $id->getElementsByTagName("idplace")->item(0)->nodeValue;
	        }
	    }
	    return "";
	}
	private function get_sex($num){
	    $left=$num%2;
	    if($left){
	        return "男";
	    }else{
	        return "女";
	    }
	}
	private function get_birthday($b){
	    if(strlen($b)!=8){
	        return null;
	    }
	    return substr($b,0,4)."-".substr($b,4,2)."-".substr($b,6,2);
	}
	private function getPlaceNo($place){
		$p=explode("/", $place,3);
		$pp="";
		$lp=$p[count($p)-1];
		echo $pp;
		$pr=array();
		$xml=new \DOMDocument();
	    $path="../thinkphp/Public/Apps/IDcard/xml/identity.xml";
	    $xml->load($path);
	    foreach ($xml->getElementsByTagName("id") as $id) {
	    	$xp=$id->getElementsByTagName("idplace")->item(0)->nodeValue;
	    	if(strstr($xp,$p[0])){
	    		$pr[0][0]=$id->getElementsByTagName("idnumber")->item(0)->nodeValue;
	    		$pr[0][1]=$xp;
	    		if(strstr($xp,$p[1])){
	    			$pr[1][0]=$id->getElementsByTagName("idnumber")->item(0)->nodeValue;
	    			$pr[1][1]=$xp;
	    			if(strstr($xp,$p[2])){
		    			$pr[2][0]=$id->getElementsByTagName("idnumber")->item(0)->nodeValue;
		    			$pr[2][1]=$xp;
		    		}
	    		}	
    		}
	    }
	    return array($pr[count($pr)-1][0],$pr[count($pr)-1][1],$lp.'公安局');
	}
	private function getIDNO($id, $gender){
		$ratio=array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
		$legal="10X98765432";
		$g1=floor(rand(0,9));
		$g2=floor(rand(0,9));
		$g3=floor(rand(0,4));
		if($gender=='男'){
			$g3=2*$g3+1;
		}else{
			$g3=2*$g3;
		}
		$id.=($g1.$g2.$g3);
		$sum=0;
		for($i=0;$i<strlen($id);$i++){
			$k=(int)substr($id, $i, 1);
			$sum+=($k*$ratio[$i]);
		}
		$v=$sum%11;
		$v=substr($legal, $v, 1);
		return $id.$v;
	}
	public function generateID(){
		$name=I('name');
		$nation=I('nation');
		$place=I('place');
		$idno=$this->getPlaceNo($place);
		/*echo $idno[0].$idno[1].$idno[2];*/
		$birthday=I('birthday');
		$ymd=explode('-', $birthday, 3);
		$gender=I('gender');
		$date=I('date');
		$date=explode('-', $date, 3);
		$len=I('len');
		$photo=I('photo');
		$id=$idno[0].$ymd[0].$ymd[1].$ymd[2];
		$id=$this->getIDNO($id,$gender);
		
		$font="./Public/Apps/fonts/SIMHEI.TTF";
		$fontn="./Public/Apps/fonts/OCR-B10BT.TTF";
		/*echo $name.$place.$birthday.$gender.$date.$photo;*/
		$dir="./Public/Apps/IDcard/img/id_low.png";
		$bg=imagecreatefromstring(file_get_contents($dir));
		$black = imagecolorallocate($bg, 0, 0, 0);
		if($photo){
			$dir=".".$photo;
		}else{
			$dir="./Public/Apps/IDcard/img/photo_low.png";
		}
		$photo=imagecreatefromstring(file_get_contents($dir));
		
		$pw=imagesx($photo);
		$ph=imagesy($photo);
		/*echo $pw.'-'.$ph;*/
		imagecopyresampled($bg, $photo, 320, 60, 0, 0, 128 ,169 ,$pw, $ph);

		imagettftext($bg, 14, 0, 95, 71, $black, $font, $name);
		imagettftext($bg, 14, 0, 95, 108, $black, $font, $gender);
		imagettftext($bg, 14, 0, 202, 108, $black, $font, $nation);
		imagettftext($bg, 14, 0, 95, 144, $black, $font, $ymd[0]);
		imagettftext($bg, 14, 0, 175, 144, $black, $font, $ymd[1]);
		imagettftext($bg, 14, 0, 225, 144, $black, $font, $ymd[2]);
		if(mb_strlen($idno[1])>10){
			imagettftext($bg, 14, 0, 95, 181, $black, $font, mb_substr($idno[1], 0, 10));
			imagettftext($bg, 14, 0, 95, 209, $black, $font, mb_substr($idno[1], 10, mb_strlen($idno[1])-10));
		}else{
			imagettftext($bg, 14, 0, 95, 181, $black, $font, $idno[1]);
		}
		
		imagettftext($bg, 18, 0, 185, 276, $black, $fontn, $id);
		
		imagettftext($bg, 12, 0, 700, 238, $black, $font, $idno[2]);
		imagettftext($bg, 12, 0, 700, 276, $black, $font, $date[0].'.'.$date[1].'.'.$date[2].'-'.($date[0]+$len).'.'.$date[1].'.'.$date[2]);
	
		//imagettftext($bg, 14, 0, 185, 276, $black, $font, $id);
	
		header("Content-type: image/png");
		imagepng($bg);
		imagedestroy($bg);
		imagedestroy($photo);
	}
	private function idpng(){

	}
	public function uploadPhoto(){
        $data['status'] = 0;
        if($_FILES['file']['error']){
           
        }else{
            $upload = new \Think\Upload();;
            $upload -> maxSize = 1024*1024;
            $upload -> exts = array('jpg','png','jpeg');
            $upload -> rootPath = './';
            $upload -> savePath =  'Uploads/temp/';
            $info = $upload -> upload();
            if(!$info){
                $data['error']=$upload -> getError();
            }else{
                $pic_url = '/'.$info['file']['savepath'] . $info['file']['savename'];
                $data['status']=1;
                $data['pic_url'] = $pic_url;
            }        
        }
        $this -> ajaxReturn($data);
	}
}