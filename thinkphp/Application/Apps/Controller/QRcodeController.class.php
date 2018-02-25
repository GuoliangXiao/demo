<?php
namespace Apps\Controller;
use Think\Controller;
class QRcodeController extends XController {
    public function index(){ 
    	parent::index();
    	$dir = './Public/Apps/QRcode/icon/';
    	$imglist=array();
		if (is_dir($dir)) {   
		    if ($dh = opendir($dir)) {   
		        while (($file = readdir($dh)) !== false) {   
		            if ($file!="." && $file!="..") {   
	                    array_push($imglist, $file);
		            }   
		        }   
		        closedir($dh);   
		    }   
		} 
		$this->assign('imglist',$imglist);
    	$this->display();
    }
    public function getLogo(){
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
    public function qrcode(){
    	$url=I('get.url');
    	$size=I('get.size');
    	$logo=I('get.logo');
        $img=I('get.img');
    	if($logo){
			Header("Content-type: image/png");
    		$image=$this->qrcode_logo($url,$size,$logo,$img);
    		ImagePng($image);
    		ImageDestroy($image);
    	}else{
    		Header("Content-type: image/png");
    		$image=$this->qrcode_simple($url,$size);
    		ImagePng($image);
    		ImageDestroy($image);
    	}
    	
    }
    public function qrcode_simple($url,$size){
    	$level=3;
    	$size=ceil($size/50);
	    Vendor('phpqrcode.phpqrcode');
	    $errorCorrectionLevel =intval($level) ;
	    $matrixPointSize = intval($size);
	    $object = new \QRcode();
	    return $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2,false, true); 
    }
    public function qrcode_logo($url,$size,$file,$img=0){
    	$QR=$this->qrcode_simple($url,$size);
        $dir;
        if($img==0){
            $dir = './Public/Apps/QRcode/icon/'.$file;
        }else{
            $dir='.'.$file;
        } 	    	
    	$logo=imagecreatefromstring(file_get_contents($dir));
    	$QR_width = imagesx($QR);           
        $QR_height = imagesy($QR);          
        $logo_width = imagesx($logo);       
        $logo_height = imagesy($logo);      
        $logo_qr_width = $QR_width / 4;   
        $scale = $logo_width/$logo_qr_width;   
        $logo_qr_height = $logo_height/$scale;   
        $from_width = ($QR_width - $logo_qr_width) / 2;
        imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
        return $QR;
    }
}