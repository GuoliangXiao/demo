<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class EditFileController extends Controller{
	public function index(){
		check_admin();
		$dir='./Uploads';
		$files=$this->my_dir($dir);
		$htmls=$this->show_dir($files);
		$this->assign('htmls',$htmls);
		$this->display();
	}
	public function deletefile(){
		$path=I('post.path');
		$path='./Uploads/'.$path;
		$b=$this->delete_dir($path,true);
		$this->ajaxReturn($b,"JSON");
	}
	private function delete_dir($path, $delDir = FALSE) {	    
	    if (is_dir($path)) {
	    	$handle = opendir($path);
	        while (false !== ( $item = readdir($handle) )) {
	            if ($item != "." && $item != "..")
	                is_dir("$path/$item") ? $this->delete_dir("$path/$item", $delDir) : unlink("$path/$item");
	        }
	        closedir($handle);
	        if ($delDir)
	            return rmdir($path);
	    }else {
	        if (file_exists($path)) {
	            return unlink($path);
	        } else {
	            return false;
	        }
	    }
	}
	private function my_dir($dir) {
	    $files = array();
	    if(@$handle = opendir($dir)) {
	        while(($file = readdir($handle)) !== false) {
	            if($file != ".." && $file != ".") {
	                if(is_dir($dir."/".$file)) {
	                    $files[$file] = $this->my_dir($dir."/".$file);
	                } else {
	                    $files[] = $file;
	                }
	 
	            }
	        }
	        closedir($handle);
	        return $files;
	    }
	}
	private function show_dir($files,$name='',$level=0){
		if(count($files)==0){
			return '没有文件';
		}
		$html="";
		foreach ($files as $key => $value) {
			if(is_array($value)){
				$html.='<tr><td style="display:inline-block;margin-left:'.(2*$level).'em"><i class="fa fa-folder fa-fw"></i><span class="file">'.$name.$key.'</span></td><td><button class="btn btn-danger btn-del">删除</button></td></tr>';
				$html=$html.($this->show_dir($value,$name.$key.'/',$level+1));
			}else{
				$html=$html.'<tr><td style="display:inline-block;margin-left:'.(2*$level).'em"><i class="fa fa-file fa-fw"></i><span class="file">'.$name.$value.'</span></td><td><button class="btn btn-danger btn-del">删除</button></td></tr>';
			}
		}
		return $html;
	}
}