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
function reFace($str){
    for($i=1;$i<76;$i++){

        //$str = str_replace("[em_$i]","<img src='../../../../comment/Public/Face/$i.gif'/>",$str);
    }
    return $str;
}