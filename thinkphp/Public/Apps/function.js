function showRank(){
	$('.div_rank').empty();
	var url='{:U("Apps/Score/index?app_id=$app_id")}';
	$('.div_rank').load(url);  	
}
function uploadScore(name,score){
	//alert(socre);
	var url="{:U('Apps/Score/uploadScore')}";
	var app_id='{$app_id}';
	$.post(url, {app_id:app_id, name:name,score:score}, function(data, textStatus, xhr) {
		/*optional stuff to do after success */
		//alert(data);
		if(data['status']==1){
			showRank();
		}else{
			alert_alt('上传失败');
		}			
	});
}