//alert('x');
//alert(editTableAction);
$("button").click(function(event) {
	/* Act on the event */
	//alert("click");
	var action=$(this).attr("class");
	var id=$(this).val();
	var json={};
	json['id']=id;
	$("span[id="+id+"]>li>input").each(function(index, el) {
			var key=$(this).attr('name');
			var val=$(this).val();
			json[key]=val;
			//alert(key);
	});
	
	json['action']=action;
	var d = JSON.stringify(json);
	alert(d);
	var dd=$.parseJSON(d);
	$.post(editTableAction,dd, function(data, textStatus, xhr) {
		/*optional stuff to do after success */
		alert(data);
		if(data=='添加成功'||data=='删除成功')
		{
			window.location.reload();
		}
	});
});
jQuery(document).ready(function($) {
	//alert('ok');
	setInterval(function() {
   	var time = new Date();
  	 // 程序计时的月从0开始取值后+1
   	var m = time.getMonth() + 1;
   	m=m<10?('0'+m):m;
   	var d=time.getDate();
   	d=d<10?('0'+d):d;
   	var h= time.getHours();
   	h=h<10?('0'+h):h;
   	var mm=time.getMinutes();
   	mm=mm<10?('0'+mm):mm;
   	var s=time.getSeconds();
   	s=s<10?'0'+s:s;
  	var t = time.getFullYear() + "-" + m + "-"+ d + " " + h + ":"+ mm + ":" + s;
  	$("li[id='created_at']").text(t);
  	$("li[id='updated_at']").text(t);
  	}, 1000);
});