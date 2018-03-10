<?php
namespace Apps\Controller;
use Think\Controller;
class Base64imgController extends XController {
	public function index(){
		parent::index();
		$this->display();
	}
    public function uploadImg(){
        $data['status'] = 0;
        $filetype=$_FILES['file']['type'];
        if($_FILES['file']['error']){
           $data['error']=$_FILES['file']['error'];
        }else if($filetype!="image/jpeg"&&$filetype!='image/png'&&$filetype!='image/gif'){
        	$data['error']="文件格式不对，请上传图片！";
        }else if(@filesize($_FILES['file']['tmp_name']) > 1024 * 1024){
        	$data['error']="请上传小于1M的图片！";
        }else{
    	    $str=file_get_contents($_FILES['file']['tmp_name']);
    	    $data['status']=1;
            $data['filetype']=$filetype;
			$data['code']=base64_encode($str);
        }
        $this -> ajaxReturn($data);
    }
}