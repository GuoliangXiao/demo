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